<?php

class C_Administrateur extends Controleur{
    
    
    // Fonction d'affichage du formulaire de création d'un utilisateur.
    function creerUtilisateur(){
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
       
        $this->vue->centre = "../vues/administrateur/templates/centre.creerUtilisateur.inc.php";
        
        
        
        $this->vue->pied = "../vues/templates/pied.inc.php";
        
        $this->vue->afficher();
    }
    
    function validationcreerutilisateur(){
        
        /**Problème d'insertion erreur : Warning: PDOStatement::execute() [pdostatement.execute]: SQLSTATE[HY093]: 
         *Invalid parameter number: parameter was not defined in /var/www/sites/PPE/GESTSTAGE/classes/Modele.class.php on line 122
         *
         * Je pense que c'est un soucis de quantité de valeur dans le $_POST et la valeur des champs.
         */
        
        
        var_dump($_POST);
        
        $lesDonneesCreationUtilisateur = new M_LesDonneesCreationUtilisateur();
        $lesDonneesCreationUtilisateur->insert($_POST);
        
        
        
    }
    
}

?>
