<?php


class Gestion

{
    # proprietes
    private $_email;
    private $_passe;
    private $_code;
    private $_nPasse;
    private $_DBC; #dbconnect - objet PDO

    # methodes
    public function __construct($db)
    {
        $this->set_DBC($db);
    }

    public function demander_npasse($datas)
    {
        print_r($datas);

        if (strlen($datas) == 5) {
            // gestion code

            $this->set_code($datas);

            // requete select avec fetch
            // $req = "SELECT * FROM loginCode WHERE code = '".$this->get_code()."'";

            // $req = "SELECT loginCode.admin_id, code, email, mot_passe FROM loginCode, admin WHERE loginCode.admin_id = admin.id";

            $req = "SELECT admin_id, code, email, mot_passe FROM loginCode INNER JOIN admin ON admin_id = admin.id";

            $resultat = $this->get_DBC()->prepare($req);
            $resultat->execute();

            $row = $resultat->fetch(PDO::FETCH_ASSOC);

            print_r($row);

            $this->set_email($row["email"]);
            $this->set_nPasse($this->generateur_passe());
            $id = $row["email"];

            // envoi email
            $TH1 = "Vous demandez un nouveau mot de passe";
            $sujet = "Voici votre nouveau mot de passe !";
            $objet = "Mot de passe";
            $url = "";

            // $message = "Bonjour, voici votre code de validation";
            // $message .= $this->get_code();


            $message = $this->emailHTML($TH1, $sujet, $this->get_nPasse(), $url);
            $this->envoi_email($this->get_email(), $objet, $message);

            // update mot_passe
            $dates = date("Y-m-d H:i:s");

            // crypter mot de passse
            $newPasse = password_hash($this->get_nPasse(), PASSWORD_DEFAULT);

            $req = "UPDATE admin SET mot_passe = '" . $newPasse . "', date_update = '" . $dates . "' WHERE id = '" . $id . "'";
            $resultat = $this->get_DBC()->query($req);

            print_r($resultat);

            if ($resultat->rowCount() === 1) {
                echo "Mise a jour ok";
            } else {
                echo "ERREUR: Problème de mise à jour voir le webmaster.";
            }

            // $this->generateur_passe();




        } else {

            // email

            $this->set_email($datas);

            # generer un code numerique // 0-9 taille de 5
            $this->set_code(rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9));

            $TH1 = "Vous demandez un nouveau mot de passe";
            $sujet = "Voici votre code de confirmation !";
            $objet = "Code validation";
            $url = "";

            // $message = "Bonjour, voici votre code de validation";
            // $message .= $this->get_code();


            $message = $this->emailHTML($TH1, $sujet, $this->get_code(), $url);

            // envoi email
            // $this->envoi_email($this->get_email(), $objet, $message);

            // $this->generateur_passe();

            // requete de selection
            $req = "SELECT * FROM admin WHERE email = '" . $this->get_email() . "'";
            $resultat = $this->get_DBC()->query($req);

            if ($resultat->rowCount() === 1) {
                foreach ($resultat as $row) {
                    //  echo $row["email"];

                    $id = $row["id"];
                    $dates = date("Y-m-d H:i:s");
                    // insert into loginCode
                    $req = "INSERT INTO loginCode (admin_id, code, date_add, date_update) VALUES ('" . $id . "', '" . $this->get_code() . "', '" . $dates . "','" . $dates . "')";

                    echo $req;

                    $resultat = $this->get_DBC()->query($req);

                    if ($resultat->rowCount() === 1) {
                        // envoi email
                        // $this->envoi_email($this->get_email(), $objet, $message);
                    } else {
                        echo "Echec Insert";
                    }
                }
            } else {
                echo "Aucun résultat";
            }
        }

        exit;
    }


    public function generateur_passe()
    {
        $chaine = "ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqurstuvwxyz23456789#@~*-_";
        $chaine = str_shuffle($chaine);

        $p = str_split($chaine, 10);

        $index = rand(0, 5);

        return $p[$index];
    }


    public function emailHTML($titre, $sujet, $code, $lien)
    {
        $messageH = '
            <html>
            <head>
            <title>' . $sujet . '</title>
            </head>
            <body>
            <h1 style="font-siez: 1.4em; color: gray;">' . $titre . '</h1>
            <p style="font-size: 1.2em">' . $sujet . '</p>
            <p style="font-size: 1.2em"> <strong style="font-size: 1.3em">' . $code . '</strong></p>';

        if (isset($lien)) {
            $messageH .= '<p style="font-size: 1.2em"><a href="' . $lien . '" title="Validez votre code">Validez votre code en cliquant ici</a></p>';
        }

        $messageH .= '<p>Votre webmaster vous remercie</p>
            </body>
            </html>
            ';

        return $messageH;
    }

    public function connexion(array $datas)
    {
    }

    public function envoi_email($to, $sujet, $message)
    {

        // $headers = 'From: webmaster@filattentes.com.gp' . "\r\n" .
        //     'Reply-To: webmaster@filattentes.com.gp' . "\r\n" .
        //     'X-Mailer: PHP/' . phpversion();

        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=utf-8';

        // Additional headers
        $headers[] = 'To: ' . $to;
        $headers[] = 'From: decimus@decimus-lenovo-v110-15isk';
        // $headers[] = 'Cc: birthdayarchive@example.com';
        // $headers[] = 'Bcc: birthdaycheck@example.com';


        // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
        $message = wordwrap($message, 70, "\r\n");

        // Envoi du mail
        if (mail($to, $sujet, $message, implode("\r\n", $headers))) {
            echo "Envoi email reussie";
        } else {
            echo "Echec d'envoie email";
        }
    }

    # getter / setter



    /**
     * Get the value of _email
     */
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Set the value of _email
     *
     * @return  self
     */
    public function set_email($_email)
    {
        $this->_email = $_email;

        return $this;
    }

    /**
     * Get the value of _passe
     */
    public function get_passe()
    {
        return $this->_passe;
    }

    /**
     * Set the value of _passe
     *
     * @return  self
     */
    public function set_passe($_passe)
    {
        $this->_passe = $_passe;

        return $this;
    }

    /**
     * Get the value of _code
     */
    public function get_code()
    {
        return $this->_code;
    }

    /**
     * Set the value of _code
     *
     * @return  self
     */
    public function set_code($_code)
    {
        $this->_code = $_code;

        return $this;
    }

    /**
     * Get the value of _nPasse
     */
    public function get_nPasse()
    {
        return $this->_nPasse;
    }

    /**
     * Set the value of _nPasse
     *
     * @return  self
     */
    public function set_nPasse($_nPasse)
    {
        $this->_nPasse = $_nPasse;

        return $this;
    }

    /**
     * Get the value of _DBC
     */
    public function get_DBC()
    {
        return $this->_DBC;
    }

    /**
     * Set the value of _DBC
     *
     * @return  self
     */
    public function set_DBC($_DBC)
    {
        $this->_DBC = $_DBC;

        return $this;
    }
}