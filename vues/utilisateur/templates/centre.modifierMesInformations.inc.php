<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<form method="post" action=".?controleur=utilisateur&action=validermodifierCoordonees&id=<?php echo $this->lesInformations->IDPERSONNE; ?>">
    <fieldset>
        <legend>Modification de mes informations</legend>
        <label for="civilite">Civilit&eacute; :</label>
        <input type="text" name="civilite" id="civilite" value="<?php echo $this->lesInformations->CIVILITE; ?>"></input><br/>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?php echo $this->lesInformations->NOM; ?>"></input><br/>
        <label for="prenom">Pr&eacute;nom :</label>
        <input type="prenom" name="prenom" id="mdp" value="<?php echo $this->lesInformations->PRENOM; ?>"></input><br/>
        <label for="mail">E-Mail :</label>
        <input type="text" name="mail" id="mail" value="<?php echo $this->lesInformations->ADRESSE_MAIL; ?>"></input><br/>
        <label for="tel">Tel :</label>
        <input type="text" name="tel" id="tel" value="<?php echo $this->lesInformations->NUM_TEL; ?>"></input><br/>
        
                <br />
                <input type="submit" value="Sauvegarder" />
                <input type="button" value="Retour" onclick="history.go(-1)">
                
    </fieldset>
   
</form>
<?php
if (isset($this->message)) {
    echo "<strong>".$this->message."</strong>";
}
?>