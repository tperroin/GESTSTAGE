<?php

class C_Utilisateur extends Controleur{
    
    function coordonees(){
        
        $this->vue->titreVue = 'Vos informations';   
        
        $this->vue->entete = "../vues/templates/entete.inc.php"; 
                
        $this->vue->gauche = "../vues/templates/gauche.inc.php";
        
        $lesInformations = new M_Utilisateurs();
        
        if(MaSession::get('role') == 4){
            $this->vue->lesInformations = $lesInformations->getFromLogin(MaSession::get('login'));
        }else{
            $this->vue->lesInformations = $lesInformations->getFromLoginValeursId(MaSession::get('login'));
        }
                
        $this->vue->loginAuthentification = MaSession::get('login');
       
        $this->vue->centre = "../vues/utilisateur/templates/centre.affichermesInformations.inc.php";
        
        $this->vue->pied = "../vues/templates/pied.inc.php";
        
        $this->vue->afficher();
    }
    
    function modifierCoordonees(){
        
        $this->vue->titreVue = 'Modification de vos informations';   
        
        $this->vue->entete = "../vues/templates/entete.inc.php"; 
                
        $this->vue->gauche = "../vues/templates/gauche.inc.php";
        
        $lesInformations = new M_Utilisateurs();
        
        if(MaSession::get('role') == 4){
            $this->vue->lesInformations = $lesInformations->getFromLogin(MaSession::get('login'));
        }else{
            $this->vue->lesInformations = $lesInformations->getFromLoginValeursId(MaSession::get('login'));
        }
                
        $this->vue->loginAuthentification = MaSession::get('login');
       
        $this->vue->centre = "../vues/utilisateur/templates/centre.modifierMesInformations.inc.php";
        
        $this->vue->pied = "../vues/templates/pied.inc.php";
        
        $this->vue->afficher();
    }
    
    function validerModifierCoordonees(){
        
        $this->vue->titreVue = "Modification de mes informations";
        $utilisateur = new M_LesDonneesCreationUtilisateur();
        // préparer la liste des paramètres
        $lesParametres = array();
        // récupérer les données du formulaire
        $lesParametres["NOM"] = $_POST["nom"];
        $lesParametres["NUM_TEL"] = $_POST["tel"];
        $lesParametres["ADRESSE_MAIL"] = $_POST["mail"];
        $lesParametres["PRENOM"] = $_POST["prenom"];
        $lesParametres["CIVILITE"] = $_POST["civilite"]; 
                        
        $ok = $utilisateur->update($_GET["id"], $lesParametres);
        if ($ok) {
            $this->vue->message = "Modifications enregistr&eacute;es";
        } else {
            $this->vue->message = "Echec des modifications";
        }
        $this->vue->afficher();
        
    }
    
}
?>