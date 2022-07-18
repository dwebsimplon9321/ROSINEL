<?php 

$req = "SELECT COUNT(*) FROM users WHERE email='" . $this->get_email() . "',  password='" . $this->get_password() . "', AND token='".$this->get_token()."' UNION SELECT COUNT(*) FROM entreprise WHERE emailGmb='".$this->get_emailGmb()."'";


$req = "SELECT COUNT(*) FROM
(
    SELECT First users WHERE email='" . $this->get_email() . "',  password='" . $this->get_password() . "', AND token='".$this->get_token()."'
    UNION
    SELECT Second entreprise WHERE emailGmb='".$this->get_emailGmb()."'
)";

$this->set_email($datas['email']);
        $this->set_emailGmb($datas['emailGmb']);
        $this->set_password($datas['password']);
        $this->set_token($datas['token']);

        
        print_r('the');
        
            $resultat = $this->get_connexion()->prepare($req);
            $resultat->execute();
            $count = $resultat->fetchColumn();
            #user_check_query = "SELECT * FROM users WHERE password='" . $password . "' AND nom='" . $nom . "' AND token IS NULL;
            
            print_r($req);

            #$row = $req->fetch(PDO::FETCH_ASSOC);
            if ($count==1 ) {
            $reqt = "UPDATE users SET token = NULL where token='".$this->get_token()."'";
    } else {
    echo "nigro";
    }