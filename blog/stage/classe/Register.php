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
    private $_token;
    private $_connexion; #pour pouvoir utiliser $db sur toutes la classe Blog

    #methode

    public function __construct($db) /*la fonction construct
     à access a toute la class Blog c'est pour cela que 
     c'est ici qu'il faut mettre le parametre $db*/
    {
        $this->set_connexion($db);
    }

    public function reguser(array $datas) #correspond au bouton ajouter, elle à un paramètre (array) et reçoit une variable (datas)
    {
        /**
         * array
         * $datas["nomchampformulaire"] -> affiche valeur du champs du formulaire
         * 
         */
         $this->set_nom($datas["nom"]); #stocke une valeur
         $this->set_prenom($datas["prenom"]); #stocke une valeur
         $this->set_tel($datas["tel"]);
         $this->set_postale($datas["postale"]); 
         $this->set_cat($datas["cat"]);
         $this->set_email($datas["email"]);
         $this->set_nomGmb($datas["nomGmb"]); 
         $this->set_emailGmb($datas["emailGmb"]);
         $this->set_password($datas["password"]);
         $this->set_passwordF($datas["password_1"]); 
         $this->set_passwordC($datas["password_2"]);
         $this->set_token($datas["token"]);

         $postaleB=$this->get_postale();
         $catB=$this->get_cat();
         $nomGmbB=$this->get_nomGmb();
         $emailGmbB=$this->get_emailGmb();
         #echo $this->get_nom(); #affiche une valeur
         #print_r($this->get_connexion);

         $queryEnt = "INSERT INTO entreprise (postale, cat, nomGmb, emailGmb) VALUES ('".$postaleB."', '".$catB."', '".$nomGmbB."', '".$emailGmbB."')";

        $token = $this->get_token();
        $token =   rand(0,10);
         $resultatEnt = $this->get_connexion()->query($queryEnt);

         $token = password_hash($_POST['$token'], PASSWORD_DEFAULT);
         print_r($datas);
         print_r($resultatEnt);

         $ent_id = $this->get_connexion()->lastInsertId();

        $password_1=$this->get_passwordF();


         print_r($ent_id);
        
         $queryUser = "INSERT INTO users (ent_id, nom, prenom, tel, email, password, token) VALUES ('".$ent_id."', '".$this->get_nom()."', '".$this->get_prenom()."', '".$this->get_tel()."', '".$this->get_email()."', '".$password_1."', '".$token."')";

         #print_r($sql); pour voir si la requete fonctionne

         #print_r($resultatEnt);

         #$resultatEnt = $this->get_connexion()->query($queryEnt);
         $resultatUser = $this->get_connexion()->query($queryUser);
         #$this->????_????($this->get_connexion()->lastInsertId());

         $_SESSION['nom']= $this->get_nom();

        #header('Location: https://chalandiz.pq.lu/stage/validation.php');
         

         #print_r($resultatA);


        

    }


    public function login(array $datas) #bis public function ajouter int = un entier au lieu d'un tableau
    {
        echo "modifier un article";

        $this->set_email($datas["email"]);
        $this->set_email($datas["password"]);
        

        $req = "SELECT FROM users WHERE email='" . $this->get_email . "' AND password='" . $this->get_password . "'";

        
            $resultat = $this->get_connexion()->prepare($req);
            $resultat->execute();
            #user_check_query = "SELECT * FROM users WHERE password='" . $password . "' AND nom='" . $nom . "' AND token IS NULL;

            $row = $resultat->fetch(PDO::FETCH_ASSOC);
            if (count($row) > 0){
                    $_SESSION['nom']= $this->get_nom();
} else {
    echo 'Empty';
}

            print_r($row);
        
    }

    public function supprimer(int $id) #**
    {
        echo "supprimer un article";
    }

    public function afficher () #** pas besoin d'id car on va forcement afficher un article
    {
        echo "afficher un article";

        $sql = "SELECT * FROM blog ORDER BY id DESC";

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
}