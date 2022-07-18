<?php
class Register
{


    #propriete - variable 

    #Blog -> Register



    private $_nom;
    private $_prenom;
    private $_tel;
    private $_postale; #*
    private $_cat; #*
    private $_email;
    private $_nomGmb; #*
    private $_emailGmb; #*
    private $_password;
    private $_passwordF; #*
    private $_passwordC; #*
    private $_date_debut;
    private $_date_fin;
    private $_token;
    private $_connexion; #pour pouvoir utiliser $db sur toutes la classe Blog

    #methode

    public function __construct($db) /*la fonction construct
     à access a toute la class Blog c'est pour cela que 
     c'est ici qu'il faut mettre le parametre $db*/
    {
        $this->set_connexion($db);
    }

    public function reguser(array $datas, $db)
    {
        $this->set_nom($datas["nom"]);
        $this->set_prenom($datas["prenom"]);
        $this->set_tel($datas["tel"]);
        $this->set_postale($datas["postale"]);
        $this->set_cat($datas["cat"]);
        $this->set_email($datas["email"]);
        $this->set_nomGmb($datas["nomGmb"]);
        $this->set_emailGmb($datas["emailGmb"]);
        $this->set_password($datas["password"]);
        $this->set_passwordF($datas["password_1"]);
        $this->set_passwordC($datas["password_2"]);
        $this->set_date_debut = date('Y-m-d', strtotime($datas["date_debut"]));
        $this->set_date_fin = date('Y-m-d', strtotime($datas["date_fin"]));



        print_r($this->get_date_debut());
        print_r($this->get_date_fin());

        $postaleB = $this->get_postale();
        $catB = $this->get_cat();
        $nomGmbB = $this->get_nomGmb();
        $emailGmbB = $this->get_emailGmb();
        $emailB = $this->get_email();
        #echo $this->get_nom(); #affiche une valeur
        #print_r($this->get_connexion);



        /*if (!preg_match('/^[-a-zA-Z0-9 .]+$/', $this->get_nom)  || empty($this->get_nom)) {

             exit;

        } else {*/

        if (!preg_match('/^[A-Za-z]+$/', $this->get_nom())  || empty($this->get_nom())) {

            $error = '1';
        } else if (!preg_match('/^[A-Za-z]+$/', $this->get_prenom())  || empty($this->get_prenom())) {

            $error = '2';
        } else if (empty($this->get_postale())) {
            $error = '3';
        } else if (empty($this->get_cat())) {
            $error = '4';
        } else if (empty($this->get_nomGmb())) {
            $error = '5';
        } else if (!filter_var($this->get_emailGmb(), FILTER_VALIDATE_EMAIL)  || empty($this->get_emailGmb())) {
            $error = '6';
        } else if (!filter_var($this->get_email(), FILTER_VALIDATE_EMAIL)  || empty($this->get_email())) {
            $error = '7';
        } else if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $this->get_passwordF())  || empty($this->get_passwordF())) {
            $error = '8';
        } else {
            $error = '';
        }




        if (!empty($error)) {
            die;
        } else {

            $email_count = 0;
            $stmt = $db->prepare("SELECT COUNT(*) AS count FROM `users` WHERE email=?");
            $stmt->execute(array($emailB));
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $email_count = $row["count"];
            }
            if ($email_count > 0) {
                #echo "Cette adresse email à déjà été enregistré pour un autre compte";
                die;
            } else {

                $queryEnt = "INSERT INTO entreprise (postale, cat, nomGmb, emailGmb) 
    VALUES ('" . $postaleB . "', '" . $catB . "', '" . $nomGmbB . "', '" . $emailGmbB . "')";

                $token = $this->get_token();
                $token =   rand(10000, 99999);

                $resultatEnt = $this->get_connexion()->query($queryEnt);


                #$token = password_hash($_POST['$token'], PASSWORD_DEFAULT);
                #print_r($datas);
                #print_r($resultatEnt);

                $ent_id = $this->get_connexion()->lastInsertId();

                $password_1 = $this->get_passwordF();

                $conf = 0;

                print_r($ent_id);

                $queryUser = "INSERT INTO users (ent_id, nom, prenom, tel, email, password, token, conf) 
         VALUES ('" . $ent_id . "', '" . $this->get_nom() . "', '" . $this->get_prenom() . "', 
         '" . $this->get_tel() . "', '" . $this->get_email() . "', '" . $password_1 . "', '" . $token . "', '" . $conf . "')";

                #print_r($sql); pour voir si la requete fonctionne

                #print_r($resultatEnt);

                #$resultatEnt = $this->get_connexion()->query($queryEnt);
                $resultatUser = $this->get_connexion()->query($queryUser);
                #$this->????_????($this->get_connexion()->lastInsertId());

                #print_r($token);
                $_SESSION['token'] = $token;
                $_SESSION['email'] = $this->get_email();
                print_r($_SESSION['email']);

                header('Location: https://chalandiz.pq.lu/stage/mailer.php');
            }
        }











        /*$req = "SELECT COUNT(*) FROM users WHERE email='" . $this->get_email() . "' OR emailGmb='" . $emailGmbB . "' LIMIT 1";

        
            $resultat = $this->get_connexion()->prepare($req);
            $resultat->execute();
            $count = $resultat->fetchColumn();

            if ($count['email']===$this->get_email()) {
            
            echo 'un utilisateur existe déjà';
        } else {
    
}*/

        #header('Location: https://chalandiz.pq.lu/stage/validation.php');


        #print_r($resultatA);




    }


    public function login(array $datas) #bis public function ajouter int = un entier au lieu d'un tableau
    {

        $this->set_email($datas["email"]);

        $this->set_password($datas["password"]);

        $req = "SELECT COUNT(*) FROM users WHERE email='" . $this->get_email() . "' AND password='" . $this->get_password() . "' AND conf IS NOT NULL";


        $resultat = $this->get_connexion()->prepare($req);
        $resultat->execute();
        $count = $resultat->fetchColumn();
        #user_check_query = "SELECT * FROM users WHERE password='" . $password . "' AND nom='" . $nom . "' AND token IS NULL;


        print_r($resultat);

        #$row = $req->fetch(PDO::FETCH_ASSOC);
        if ($count == 0) {
            $reqt = "SELECT COUNT(*) FROM users WHERE email='" . $this->get_email() . "' AND password='" . $this->get_password() . "' AND conf IS NULL";
            $resultat = $this->get_connexion()->prepare($reqt);
            $resultat->execute();
            $countt = $resultat->fetchColumn();
            $_SESSION['email'] = $this->get_email();
            $_SESSION['password'] = $this->get_password();
            $reqto = "SELECT token FROM users WHERE email='" . $_SESSION['email'] . "' AND password='" . $_SESSION['password'] . "'";
            $resultat = $this->get_connexion()->prepare($reqto);
            $resultat->execute();
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                foreach ($row as $cname => $cvalue) {
                    #print "$cname: $cvalue\t";
                    $_SESSION['token'] = $cvalue;
                    print_r($_SESSION['token']);
                }
                #print "\r\n";
            }
            #header('Location: https://chalandiz.pq.lu/stage/mailer.php');

            /*
                if ($countt==1) {
                    $token= 0;
                    
                    $reqt = "SELECT COUNT(*) FROM users WHERE email='" . $this->get_email() . "' AND password='" . $this->get_password() . "' AND token IS NOT NULL";
                    $resultat = $this->get_connexion()->prepare($reqt);
                $resultat->execute();

                    if ($countt==1) {
                        print_r($resultat);
                    $_SESSION['token']= $token;
                    print_r($token);
                    $_SESSION['email']= $this->get_email();
                    } else {

                    }
                    
                    
            
                } else {


                }*/
        } else {
            $_SESSION['email'] = $this->get_email();
        }
    }

    public function verifier(array $datas)
    {
        $this->set_email($datas['email']);
        $this->set_password($datas['password']);
        $this->set_token($datas['token']);

        $req = "SELECT COUNT(*) FROM users WHERE email='" . $this->get_email() . "' AND password='" . $this->get_password() . "' AND token='" . $this->get_token() . "'";

        print_r('the');

        $resultat = $this->get_connexion()->prepare($req);
        $resultat->execute();
        $count = $resultat->fetchColumn();
        #user_check_query = "SELECT * FROM users WHERE password='" . $password . "' AND nom='" . $nom . "' AND token IS NULL;

        print_r($req);
        print_r($resultat);

        #$row = $req->fetch(PDO::FETCH_ASSOC);
        if ($count == 1) {
            $reqt = "UPDATE users SET conf = 1 where token='" . $this->get_token() . "'";
            $resultat = $this->get_connexion()->prepare($reqt);
            $resultat->execute();
            print_r($reqt);
        } else {
            echo "aucun resultat";
        }
    }

    public function changepass(array $datas, $db) #**
    {

        $this->set_token($datas['token']);
        $this->set_password($datas['password']);

        $token_count = 0;
        $stmt = $db->prepare("SELECT COUNT(*) AS count FROM `users` WHERE token=?");
        $stmt->execute(array($this->get_token()));
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $token_count = $row["count"];
        }
        if ($token_count > 0) {

            if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $this->get_password())  || empty($this->get_password())) {
                $error='1';
               
            } else {
                $error = '';
            }

            if (!empty($error)) {
                die;
            } else {
                
                $req = "UPDATE users SET password = '" . $this->get_password() . "' WHERE token = '" . $this->get_token() . "' ";

                $resultat = $this->get_connexion()->query($req);

                print_r($resultat);

            }
            
            }
            

            header('Location: https://chalandiz.pq.lu/stage/index.php');

            #print_r($resultat);
    }

    public function changepass(array $datas, $db) #**
    {

        $this->set_token($datas['token']);

        $token_count = 0;
        $stmt = $db->prepare("SELECT COUNT(*) AS count FROM `users` WHERE token=?");
        $stmt->execute(array($this->get_token()));
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $token_count = $row["count"];
        }
        if ($token_count > 0) {
            $this->set_password($datas['password']);

        $password = password_hash($this->get_password(), PASSWORD_DEFAULT);


        $req = "UPDATE users SET password = '" . $password . "' WHERE email = '" . $_SESSION['email'] . "' ";


        $resultat = $this->get_connexion()->query($req);



        #print_r($resultat);
        }

        
    }

    public function cancelsub() #** pas besoin d'id car on va forcement afficher un article

    {
        $sql = "SELECT id_opp FROM users WHERE email='" . $this->get_email() . "'";


        $resultat = $this->get_connexion()->query($sql);

        #print_r($resultat);

        $row = $resultat->fetch(PDO::FETCH_ASSOC); #ASSOC: tout ce qui sera affiche sera un tableau

        #print_r($row);

        return $row; #renvoyer à la page d'accueil la requete
    }

    public function profile() #** pas besoin d'id car on va forcement afficher un article
    {
        echo "afficher un article";

        #$sql = "SELECT nomGmb FROM entreprise WHERE id=ent_id AND email=$_SESSION['email']";

        $resultat = $this->get_connexion()->query($sql);

        #print_r($resultat);

        $row = $resultat->fetch(PDO::FETCH_ASSOC); #ASSOC: tout ce qui sera affiche sera un tableau

        #print_r($row);

        return $row; #renvoyer à la page d'accueil la requete
    }

    #getter/setter

    /**
     * Get the value of _token
     */
    public function get_token()
    {
        return $this->_token;
    }

    /**
     * Set the value of _token
     *
     * @return  self
     */
    public function set_token($_token)
    {
        $this->_token = $_token;

        return $this;
    }

    /**
     * Get the value of _postale
     */
    public function get_postale()
    {
        return $this->_postale;
    }

    /**
     * Set the value of _postale
     *
     * @return  self
     */
    public function set_postale($_postale)
    {
        $this->_postale = $_postale;

        return $this;
    }

    /**
     * Get the value of _nomGmb
     */
    public function get_nomGmb()
    {
        return $this->_nomGmb;
    }

    /**
     * Set the value of _nomGmb
     *
     * @return  self
     */
    public function set_nomGmb($_nomGmb)
    {
        $this->_nomGmb = $_nomGmb;

        return $this;
    }

    /**
     * Get the value of _emailGmb
     */
    public function get_emailGmb()
    {
        return $this->_emailGmb;
    }

    /**
     * Set the value of _emailGmb
     *
     * @return  self
     */
    public function set_emailGmb($_emailGmb)
    {
        $this->_emailGmb = $_emailGmb;

        return $this;
    }

    /**
     * Get the value of _passwordF
     */
    public function get_passwordF()
    {
        return $this->_passwordF;
    }

    /**
     * Set the value of _passwordF
     *
     * @return  self
     */
    public function set_passwordF($_passwordF)
    {
        $this->_passwordF = $_passwordF;

        return $this;
    }

    /**
     * Get the value of _passwordC
     */
    public function get_passwordC()
    {
        return $this->_passwordC;
    }

    /**
     * Set the value of _passwordC
     *
     * @return  self
     */
    public function set_passwordC($_passwordC)
    {
        $this->_passwordC = $_passwordC;

        return $this;
    }

    /**
     * Get the value of _prenom
     */
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of _nom
     */
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _cat
     */
    public function get_cat()
    {
        return $this->_cat;
    }

    /**
     * Set the value of _cat
     *
     * @return  self
     */
    public function set_cat($_cat)
    {
        $this->_cat = $_cat;

        return $this;
    }

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
     * Get the value of _password
     */
    public function get_password()
    {
        return $this->_password;
    }

    /**
     * Set the value of _password
     *
     * @return  self
     */
    public function set_password($_password)
    {
        $this->_password = $_password;

        return $this;
    }

    /**
     * Get the value of _connexion
     */
    public function get_connexion()
    {
        return $this->_connexion;
    }

    /**
     * Set the value of _connexion
     *
     * @return  self
     */
    public function set_connexion($_connexion)
    {
        $this->_connexion = $_connexion;

        return $this;
    }

    /**
     * Get the value of _tel
     */
    public function get_tel()
    {
        return $this->_tel;
    }

    /**
     * Set the value of _tel
     *
     * @return  self
     */
    public function set_tel($_tel)
    {
        $this->_tel = $_tel;

        return $this;
    }

    /**
     * Get the value of _date_debut
     */
    public function get_date_debut()
    {
        return $this->_date_debut;
    }

    /**
     * Set the value of _date_debut
     *
     * @return  self
     */
    public function set_date_debut($_date_debut)
    {
        $this->_date_debut = $_date_debut;

        return $this;
    }

    /**
     * Get the value of _date_fin
     */
    public function get_date_fin()
    {
        return $this->_date_fin;
    }

    /**
     * Set the value of _date_fin
     *
     * @return  self
     */
    public function set_date_fin($_date_fin)
    {
        $this->_date_fin = $_date_fin;

        return $this;
    }
}
