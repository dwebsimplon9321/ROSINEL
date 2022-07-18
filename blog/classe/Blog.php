<?php
class Blog
{

    #propriete - variable

    private $_date;
    private $_titre;
    private $_resume;
    private $_complet;
    private $_connexion; #pour pouvoir utiliser $db sur toutes la classe Blog

    #methode

    public function __construct($db) /*la fonction construct
     à access a toute la class Blog c'est pour cela que 
     c'est ici qu'il faut mettre le parametre $db*/
    {
        $this->set_connexion($db);
    }

    public function ajouter(array $datas) #correspond au bouton ajouter, elle à un paramètre (array) et reçoit une variable (datas)
    {
        echo "ajouter un article ";

        ini_set('display _errors', '1');

        /**
         * array
         * $datas["nomchampformulaire"] -> affiche valeur du champs du formulaire
         * 
         */

         $this->set_date($datas["date"]); #stocke une valeur
         $this->set_titre($datas["titre"]); #stocke une valeur
         $this->set_resume($datas["resume"]); #stocke une valeur
         $this->set_complet($datas["complet"]); #stocke une valeur

         #echo $this->get_date(); #affiche une valeur
         #print_r($this->get_connexion);

         $sql = "INSERT INTO blog (date, titre, resume, complet) 
         VALUES ('".$this->get_date()."', '".$this->get_titre()."', '".$this->get_resume()."', '".$this->get_complet()."')";

         #print_r($sql); pour voir si la requete fonctionne

         $resultatA = $this->get_connexion()->query($sql);

         print_r($resultatA);

    }

    public function modifier(int $id) #bis public function ajouter int = un entier au lieu d'un tableau
    {
        echo "modifier un article";

    }

    public function supprimer (int $id) #**
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
     * Get the value of _date
     */ 
    public function get_date()
    {
        return $this->_date;
    }

    /**
     * Set the value of _date
     *
     * @return  self
     */ 
    public function set_date($_date)
    {
        $this->_date = $_date;

        return $this;
    }

    /**
     * Get the value of _titre
     */ 
    public function get_titre()
    {
        return $this->_titre;
    }

    /**
     * Set the value of _titre
     *
     * @return  self
     */ 
    public function set_titre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }

    /**
     * Get the value of _resume
     */ 
    public function get_resume()
    {
        return $this->_resume;
    }

    /**
     * Set the value of _resume
     *
     * @return  self
     */ 
    public function set_resume($_resume)
    {
        $this->_resume = $_resume;

        return $this;
    }

    /**
     * Get the value of _complet
     */ 
    public function get_complet()
    {
        return $this->_complet;
    }

    /**
     * Set the value of _complet
     *
     * @return  self
     */ 
    public function set_complet($_complet)
    {
        $this->_complet = $_complet;

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
}