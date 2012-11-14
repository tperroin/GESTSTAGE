<!-- VARIABLES NECESSAIRES -->
<!-- Constantes globales  de includes/version.inc.php -->
<!-- $this->loginAuthentification : login si authentification ok -->
<!-- $this->listeCateg : tableau de <Enregistrement> avec les champs 'cat_code' et 'cat_libelle' -->
<ul class="menugauche">
    <p><b>Menu</b></p><p class="note">
    <li><a href="./index.php" >Accueil</a></li>
    <hr/>
    <?php
    if (isset($this->loginAuthentification)){  
        echo "<h6>".$this->loginAuthentification."</h6>";
        echo "<li><a href=\".?controleur=accueil&action=seDeconnecter\">Se déconnecter</a></li>";
    }else{
        echo "<li><a href=\".?controleur=accueil&action=seConnecter\">Se connecter</a></li>";
    }  
    
    echo "<li><a href=\".?controleur=utilisateur&action=coordonees\">Mes informations</a></li>";
    
    
    echo "<li><a href=\".?controleur=administrateur&action=creerUtilisateur\">Cr&eacute;er un utilisateur</a></li>";
    
    ?>
</ul>
