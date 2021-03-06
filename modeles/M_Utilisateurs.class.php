<?php

class M_Utilisateurs extends Modele {
	protected $table='UTILISATEUR';
        protected $clePrimaire='IDPERSONNE';
        protected $valeurLogin= '$_SESSION["auth"]["login"]';
        
/**
 * verifierLogin
 * @param string $login
 * @param string $mdp
 * @return boolean 
 */
function verifierLogin($login, $mdp) {
    $cnx = $this->connecter();
    if ($cnx) {
        $sql = "SELECT * FROM $this->table WHERE ADRESSE_MAIL=:l AND MDPUTILISATEUR=:m";
    
        $stmt = $cnx->prepare($sql);
        $execute = $stmt->execute(array(':l' => $login, ':m' => $mdp));
        $row= $stmt->fetch(PDO::FETCH_ASSOC);
   }
        return $row;
}

function verifierRole($idRole){
    $cnx = $this->connecter();
    if ($cnx){
        $sql = "SELECT FROM $this->table2";
    }
    
}
        
}

?>
