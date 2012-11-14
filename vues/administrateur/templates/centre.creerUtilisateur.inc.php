<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<form method="post" action=".?controleur=administrateur&action=creerutilisateur">
    <fieldset>
        <legend>Ses informations g&eacute;n&eacute;rales</legend>
        <label for="civilite">Civilit&eacute; :</label>
        <input type="text" name="civilite" id="civilite"></input><br/>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"></input><br/>
        <label for="prenom">Pr&eacute;nom :</label>
        <input type="prenom" name="prenom" id="mdp"></input><br/>
        <label for="mail">E-Mail :</label>
        <input type="text" name="mail" id="mail"></input><br/>
        <label for="tel">Tel :</label>
        <input type="text" name="tel" id="tel"></input><br/>
        <label for="etudes">Etudes :</label>
        <input type="text" name="etudes" id="etudes"></input><br/>
        <label for="formation">Formation :</label>
        <input type="text" name="formation" id="formation"></input><br/>
        <label for="option">Option :</label>
        <input type="text" name="option" id="option"></input><br/>
    </fieldset>
    <fieldset>
        <legend>Ses identifiants de connexion</legend>
        <label for="login">Login :</label>
        <input type="text" name="login" id="login"></input><br/>
        <label for="mdp">Mot de passe :</label>
        <input type="text" name="mdp" id="mdp"></input><br/>
        <label for="role">R&ocirc;le :</label>
        <input type="role" name="role" id="mdp"></input><br/>
        
    </fieldset>
    <fieldset>
        <input type="submit" value="Cr&eacute;er l'utilisateur" ></input>
    </fieldset>
</form>
<?php
if (isset($this->message)) {
    echo "<strong>".$this->message."</strong>";
}
?>