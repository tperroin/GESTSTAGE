<?php

class C_Utilisateur extends Controleur{
    function coordonees(){
        
                $this->vue->titreVue = 'Cr&eacute;ation d\'un utilisateur';   
        
        $this->vue->entete = "../vues/templates/entete.inc.php"; 
                
        $this->vue->gauche = "../vues/templates/gauche.inc.php";
        
        $lesFormations = new M_ListeFormations();
        $this->vue->lesFormations = $lesFormations->getAll();
        
        $lesClasses = new M_ListeClasses();
        $this->vue->lesClasses = $lesClasses->getAll();
        
        $lesOptions = new M_ListeOptions();
        $this->vue->lesOptions = $lesOptions->getAll();
        
        $lesRoles = new M_ListeRoles();
        $this->vue->lesRoles = $lesRoles->getAll();
       
        $this->vue->centre = "../vues/utilisateur/templates/centre.affichermesInformations.inc.php";
        
        $this->vue->pied = "../vues/templates/pied.inc.php";
        
        $this->vue->afficher();
    }
}
?>