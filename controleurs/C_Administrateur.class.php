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
        $this->vue->titreVue = "Validation cr&eacute;ation de l'utilisateur";
        $utilisateur = new M_LesDonneesCreationUtilisateur();
        // préparer la liste des paramètres
        $lesParametres = array();
        // récupérer les données du formulaire
        $lesParametres[0] = 1;
        var_dump($_POST);
        $lesParametres[1] = $_POST['login'];
        $lesParametres[2] = $_POST['mdp'];
        $lesParametres[3] = $_POST['nom'];
        $lesParametres[4] = $_POST['tel'];
        $lesParametres[5] = $_POST['mail'];
        $lesParametres[6] = $_POST['prenom'];
        $lesParametres[7] = 'Mr';
        $lesParametres[8] = 1;
        $lesParametres[9] = 1;
        $lesParametres[10] = 1;
        $ok = $utilisateur->insert($lesParametres);
        if ($ok) {
            $this->vue->message = "Utilisateur cr&eacute;&eacute;";
        } else {
            $this->vue->message = "Echec de l'ajout de l'utilisateur";
        }
        $this->vue->afficher();
    }
    
}

?>
