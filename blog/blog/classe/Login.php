<?php
class Login
{

    #propriete - variable

    private $_email;
    private $_password;
    private $_connexion; #pour pouvoir utiliser $db sur toutes la classe Blog

    #methode

    public function __construct($db) /*la fonction construct
     à access a toute la class Blog c'est pour cela que 
     c'est ici qu'il faut mettre le parametre $db*/
    {
        $this->set_connexion($db);
    }


    public function login() #bis public function ajouter int = un entier au lieu d'un tableau
    {

        
            $this->set_email($_POST["email"]); 
            $this->set_password($_POST["password"]);
            /*
            $stmt = "SELECT * FROM user WHERE email= '".$this->get_email()."' AND password='".$this->get_password()."'";
            
            */

            $req = "SELECT * FROM user WHERE email = '".$this->get_email()."' AND password = '".$this->get_password()."'";
            $resultat = $this->get_connexion()->query($req);
            $reqq = $resultat->fetch(PDO::FETCH_ASSOC);

            
            
    

            
        
            

        

        

        /*$sql = "SELECT FROM user WHERE email='".$this->get_email()."' AND password='".$this->get_password()."'";

        $resultat = $this->get_connexion()->prepare($sql);
            $resultat->execute();

            $row = $resultat->fetch(PDO::FETCH_ASSOC);

            print_r('connexion');

        if ($row-> rowCount()==1 ){
      
        print_r($resultat);
        header('https://blogdweb.com.gp/blog/index.php');
      
          } else {

            print_r('22222222222222');

          } */
        
    }

    #getter/setter

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
}