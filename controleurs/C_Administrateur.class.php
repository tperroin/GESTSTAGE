<?php

class C_Administrateur extends Controleur{
    function creerUtilisateur(){
        $this->vue->titreVue = 'Création d\'un utilisateur';   
        
        $this->vue->entete = "../vues/templates/entete.inc.php"; 
        
        $this->vue->gauche = "../vues/templates/gauche.inc.php";
       
        $this->vue->centre = "../vues/administrateur/templates/centre.creerUtilisateur.inc.php";
        
        $this->vue->pied = "../vues/templates/pied.inc.php";
        
        $this->vue->afficher();
    }
}

?>
