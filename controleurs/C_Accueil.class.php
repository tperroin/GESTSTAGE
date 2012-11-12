<?php

class C_Accueil extends Controleur {

    /**
     * controleur= accueil & action= index
     * Afficher la page d'accueil
     */
    function index() {
        $this->vue->titreVue = "GestStage : Accueil";
        $this->vue->entete = "../vues/templates/entete.inc.php";

        $this->vue->gauche = "../vues/templates/gauche.inc.php";

        $this->vue->pied = "../vues/templates/pied.inc.php";

        $this->vue->centre = "../vues/accueil/templates/centre.inc.php";

        $this->vue->loginAuthentification = MaSession::get('login');
        $this->vue->afficher();
    }

    /**
     * controleur= accueil & action= seConnecter
     * Afficher le formulaire d'authentification au centre
     */
    function seConnecter() {
        $this->vue->titreVue = "GestStage : Accueil";
        $this->vue->entete = "../vues/templates/entete.inc.php";
       
        $this->vue->gauche = "../vues/templates/gauche.inc.php";
        
        $this->vue->pied = "../vues/templates/pied.inc.php";
        // Centre : formulaire de connexion
        $this->vue->centre = "../vues/accueil/templates/centre.seConnecter.inc.php";

        $this->vue->loginAuthentification = MaSession::get('login');
        $this->vue->afficher();
    }

    /**
     * controleur= accueil & action= authentifier
     * Vérifier les données d'authentification :
     *  - si c'est correct, démarrer une nouvelle session et afficher la page d'accueil
     *  - sinon, réafficher l'écran d'authentification
     */
    function authentifier() {

       /**
        * A compléter en fonction des droits (Julien et Tanguy) Voir fonction authentifier de lafleurMVCObjet
        */
        
    }

    /**
     * controleur= accueil & action= seDeconnecter
     * Afficher fermer la session en cours et afficher la page d'accueil
     */
    function seDeconnecter() {
        MaSession::fermer();
        header("Location:  index.php");
    }

}