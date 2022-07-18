<?php

class Adherant
{
    //propriete
    private $_nomA;
    private $_prenom;
    private $_naissanceA;
    private $_email;


    private $_nom; // nom du chien
    private $_affixe;
    private $_race;
    private $_naissance; // date de naissance du chien
    private $_sexe;
    private $_identification;
    private $_lof;
    private $_ct;
    private $_fapac;





    //methodes
    public function __construct()
    {
        date_default_timezone_set('America/Guadeloupe');
    }


    public function adhesion(array $datas, $fichiers)
    {

        #path server web
        $path = $_SERVER["DOCUMENT_ROOT"] . "/adherants/";

        chdir($path);

        // adherant
        $nomC = $this->nettoyer($datas["nomA"]);

        // couper chaine pour 150 caractère uniquement
        $nomC = strtoupper(trim(substr($nomC, 0, 150)));
        $this->set_nomA($nomC);


        $prenomC = $this->nettoyer($datas["prenom"]);

        // couper chaine pour 100 caractère uniquement
        $prenomC = substr($prenomC, 0, 100);
        $prenomC = trim(ucfirst($prenomC));
        $this->set_prenom($prenomC);

        $this->set_naissanceA($datas["naissanceA"]);

        // couper chaine pour 300 caractère uniquement
        $emailC = substr($datas["email"], 0, 300);
        $emailC = trim(strtolower($emailC));
        $this->set_email($emailC);


        // formatage dossier
        $dateI = date("Y-m-d");  //2022-04-11

        $dossier = $this->get_nomA() . "_" . $prenomC . "_" . $this->get_naissanceA();

        #creer un dossier pour les adherants
        if (@mkdir($path . $dossier, 0777)) {
            #securiser le dossier
            touch($path . $dossier . "/index.html");


            #nom dosssier pour les chiens
            $nbrChiens = count($datas["nom"]);

            for ($i = 0; $i < $nbrChiens; $i++) {
                $this->addDirctory($datas['nom'][$i], $datas["identification"][$i], $path . $dossier);
            }
        } else {
            # dossier existe 
            //echo 'le dossier adherant existe';


            # dossier du chien

            #nom dosssier pour les chiens
            $nbrChiens = count($datas["nom"]);

            for ($i = 0; $i < $nbrChiens; $i++) {
                #virifier si dossier chien existe
                $reponse = $this->addDirctory($datas["nom"][$i], $datas["identification"][$i], $path . $dossier);

                if ($reponse != 1) 
                {
                    echo("dossier existe");
                    print_r($fichiers);

                    if($nbrChiens === 2){
                        print_r($fichiers["cyno1"]);
                        print_r($fichiers["cyno2"]);

                        $nbrD = count($fichiers["cyno1"]["name"]);
                        $nbrD = count($fichiers["cyno2"]["name"]);

                        // chien 1
                        for($c1=0; $c1 < $nbrD; $c1++)
                        {
                            #traitement erreur fichier 
                        if ($fichiers['cyno1']['error'][$c1] === UPLOAD_ERR_OK) {
                            # print_r($fichiers);

                            $dossC = $path . $dossier . "/" . $this->get_nom() . "_" . $this->get_identification();
                            $nomFichierFin = $path . $dossier . "/" . $this->get_nom() . "_" . $this->get_identification() . $c1;

                            #deplacer fichier dans dossier du chien

                            $this->addFilesForDogs($dossC, $fichiers["cyno1"]['tmp_name'][$c1], $nomFichierFin, $fichiers['cyno1']['type'][$c1]);
                        } else {
                            print_r($fichiers['cyno1']['error'][$c1]);
                        }
                        }

                        // chien 2
                        for($c2=0; $c2 < $nbrD; $c2++)
                        {
                            #traitement erreur fichier 
                        if ($fichiers['cyno1']['error'][$c2] === UPLOAD_ERR_OK) {
                            # print_r($fichiers);

                            $dossC = $path . $dossier . "/" . $this->get_nom() . "_" . $this->get_identification();
                            $nomFichierFin = $path . $dossier . "/" . $this->get_nom() . "_" . $this->get_identification() . $c2;

                            #deplacer fichier dans dossier du chien

                            $this->addFilesForDogs($dossC, $fichiers["cyno2"]['tmp_name'][$c2], $nomFichierFin, $fichiers['cyno2']['type'][$c2]);
                        } else {
                            print_r($fichiers['cyno2']['error'][$c2]);
                        }
                        }



                    } else {
                        print_r($fichiers["cyno1"]);
                    }

                    /*#compte les documents
                    echo $nbrD = count($fichiers['document']["name"]);

                    #boucle nombre de document
                    for ($d = 0; $d < $nbrD; $d++) {
                        #traitement erreur fichier 
                        if ($fichiers['document']['error'][$d] === UPLOAD_ERR_OK) {
                            # print_r($fichiers);

                            $dossC = $path . $dossier . "/" . $this->get_nom() . "_" . $this->get_identification();
                            $nomFichierFin = $path . $dossier . "/" . $this->get_nom() . "_" . $this->get_identification() . $d;

                            #deplacer fichier dans dossier du chien

                            $this->addFilesForDogs($dossC, $fichiers['document']['tmp_name'][$d], $nomFichierFin, $fichiers['document']['type'][$d]);
                        } else {
                            print_r($fichiers['document']['error'][$d]);
                        }
                    }*/
                } else {
                    

                }
            }
        }

        // print_r($_SERVER);

        exit;

        //print_r($fichiers["document"]);

        /*$nbrD = count($fichiers);

        $dossierP = "/var/www/rosinel/adherants/pako";

        for ($c = 0; $c < $nbrD; $c++) {

            $erreur = $fichiers["document"]["error"][$c];

            if (isset($erreur) === 0) {
                $type = $fichiers["document"]["type"][0];


                if (isset($type) === "image/jpeg") {
                    $nomFile = $fichiers["document"]["tmp_name"];
                    $nomFichierFInal = $fichiers["document"]["name"];

                    // deplacer fichier dans un dossier pako exemple
                    move_uploaded_file($nomFile, $dossierP . "/" . $nomFichierFInal);
                } else {
                    echo "Erreur sur le/les types fichiers";
                }
            } else {
                echo "Erreur sur le/les types fichiers";
            }

            //

            echo $type;
        }*/
        // $this->set_nom($datas["noms"][0]);

        // echo $this->get_nom();


        // creation boucle for pour lire le tableau

        for ($i = 0; $i < 2; $i++) {
            $this->set_nom($datas["nom"][$i]);
            $this->set_race($datas["race"][$i]);

            // // affiche donnees / console.log() de php

            // echo $this->get_nom();
            // echo $this->get_race();
        }
    }

    public function addDirctory(string $dogName, string $dogID, string $directoryAD)
    {

        $this->set_nom(strtoupper(trim(substr($this->nettoyer($dogName), 0, 10))));
        $this->set_identification(trim(substr($this->nettoyerBis($dogID), 0, 15)));

        # dossier du chien 
        $dossierC = $this->get_nom() . "_" . $this->get_identification();

        #verifier si dossier existe 
        if (@mkdir($directoryAD . "/" . $dossierC, 0777)) {
            touch($directoryAD . "/" . $dossierC . "/index.html");

            return 1;
        } else {
            //echo 'le dossier de votre chien existe deja vu';
            return 0;
        }
    }

    public function addFilesForDogs($dossierC, $fichierTMP, $fichiersVO, $type)
    {
        print_r($fichiersVO);
        echo '<br>';

        // deplacer fichier dans un doosier pako exemple
        //move_uploaded_file($fichierTMP, $dossierC."/".$fichiersVO);
        print_r($type);


        switch ($type) {
            case 'image/jpeg';
            $ext = "jpg";
            break;
            
            case 'application/pdf';
            $ext = "pdf";
            break;

            case 'image/webpimage/heif';
            $ext = "webp";
            break;

            case 'image/webpimage/heif, image/heif-sequence, image/heic, image/heic-sequence;';
            $ext = "heif";
            break;

            case 'image/avif, image/avif-sequence;';
            $ext = "avif";
            break;

            default:
            break;
            #accept=".jpg, .jpeg, image/jpg, image/png, application/pdf, image/webpimage/heif, image/heif-sequence, image/heic, image/heic-sequence; image/avif, image/avif-sequence"

        }
        echo ($dossierC."/".$fichiersVO.".".$ext);

        move_uploaded_file($fichierTMP.$dossierC."/".$fichiersVO.".".$ext);
    }



    public function nettoyer($data)
    {
        // formatage de données
        $resultat = htmlentities(htmlspecialchars(strip_tags($data)));


        // recherche caractere speciaux et chiffre et remplace  par vide
        $pattern = '/[0-9#-&;,.:@!(){}=|_^]/i';
        $replacement = '';
        $dataFin = preg_replace($pattern, $replacement, $resultat);

        // retourner (afficher) chaine de caractere nettoyer et securise
        return $dataFin;
    }

    public function nettoyerBis($datas)
    {
        // formatage de données
        $resultat = htmlentities(htmlspecialchars(strip_tags($datas)));


        // recherche caractere speciaux et chiffre et remplace  par vide
        $pattern = '/[a-zA-Z#-&;,.:@!(){}=|_^]/i';
        $replacement = '';
        $dataFin = preg_replace($pattern, $replacement, $resultat);

        // retourner (afficher) chaine de caractere nettoyer et securise
        return $dataFin;
    }


    //getter / setter



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
     * Get the value of _affixe
     */
    public function get_affixe()
    {
        return $this->_affixe;
    }

    /**
     * Set the value of _affixe
     *
     * @return  self
     */
    public function set_affixe($_affixe)
    {
        $this->_affixe = $_affixe;

        return $this;
    }

    /**
     * Get the value of _race
     */
    public function get_race()
    {
        return $this->_race;
    }

    /**
     * Set the value of _race
     *
     * @return  self
     */
    public function set_race($_race)
    {
        $this->_race = $_race;

        return $this;
    }

    /**
     * Get the value of _naissance
     */
    public function get_naissance()
    {
        return $this->_naissance;
    }

    /**
     * Set the value of _naissance
     *
     * @return  self
     */
    public function set_naissance($_naissance)
    {
        $this->_naissance = $_naissance;

        return $this;
    }

    /**
     * Get the value of _sexe
     */
    public function get_sexe()
    {
        return $this->_sexe;
    }

    /**
     * Set the value of _sexe
     *
     * @return  self
     */
    public function set_sexe($_sexe)
    {
        $this->_sexe = $_sexe;

        return $this;
    }

    /**
     * Get the value of _identification
     */
    public function get_identification()
    {
        return $this->_identification;
    }

    /**
     * Set the value of _identification
     *
     * @return  self
     */
    public function set_identification($_identification)
    {
        $this->_identification = $_identification;

        return $this;
    }

    /**
     * Get the value of _lof
     */
    public function get_lof()
    {
        return $this->_lof;
    }

    /**
     * Set the value of _lof
     *
     * @return  self
     */
    public function set_lof($_lof)
    {
        $this->_lof = $_lof;

        return $this;
    }

    /**
     * Get the value of _ct
     */
    public function get_ct()
    {
        return $this->_ct;
    }

    /**
     * Set the value of _ct
     *
     * @return  self
     */
    public function set_ct($_ct)
    {
        $this->_ct = $_ct;

        return $this;
    }

    /**
     * Get the value of _fapac
     */
    public function get_fapac()
    {
        return $this->_fapac;
    }

    /**
     * Set the value of _fapac
     *
     * @return  self
     */
    public function set_fapac($_fapac)
    {
        $this->_fapac = $_fapac;

        return $this;
    }

    /**
     * Get the value of _nomA
     */
    public function get_nomA()
    {
        return $this->_nomA;
    }

    /**
     * Set the value of _nomA
     *
     * @return  self
     */
    public function set_nomA($_nomA)
    {
        $this->_nomA = $_nomA;

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
     * Get the value of _naissanceA
     */
    public function get_naissanceA()
    {
        return $this->_naissanceA;
    }

    /**
     * Set the value of _naissanceA
     *
     * @return  self
     */
    public function set_naissanceA($_naissanceA)
    {
        $this->_naissanceA = $_naissanceA;

        return $this;
    }
}
