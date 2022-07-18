<?php
    session_start();

    $_SESSION["communes"] = $_POST["inputCommune"];
if(isset($_SESSION["communes"])){
    header('Location: https://chalandiz.fr.gp/suivant.php');
    exit;
}


class Inscription 
{
    # propiete 
    private $_civilite;
    private $_nom;
    private $_prenom;
    private $_nomE;
    private $_prenomE;

    private $_DBC;

    # methode 
    public function __construct($db)
    {
        $this->set;
    }

    public function save(array )
    {

    }


    # getter / setter

    /**
     * Get the value of _civilite
     */ 
    public function get_civilite()
    {
        return $this->_civilite;
    }

    /**
     * Set the value of _civilite
     *
     * @return  self
     */ 
    public function set_civilite($_civilite)
    {
        $this->_civilite = $_civilite;

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
     * Get the value of _nomE
     */ 
    public function get_nomE()
    {
        return $this->_nomE;
    }

    /**
     * Set the value of _nomE
     *
     * @return  self
     */ 
    public function set_nomE($_nomE)
    {
        $this->_nomE = $_nomE;

        return $this;
    }

    /**
     * Get the value of _prenomE
     */ 
    public function get_prenomE()
    {
        return $this->_prenomE;
    }

    /**
     * Set the value of _prenomE
     *
     * @return  self
     */ 
    public function set_prenomE($_prenomE)
    {
        $this->_prenomE = $_prenomE;

        return $this;
    }
}

$_POST["nom"]= "ROSINEL";
$_Post["prenom"] = "ESTEBAN";
$_POST["nomE"] = "ROSINEL";
$_POST["prenomE"] = "RUBEN";

include("db_")

$save = new Inscritpion($db);