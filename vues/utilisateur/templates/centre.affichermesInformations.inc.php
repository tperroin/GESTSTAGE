<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<form>
    <fieldset>
        <legend>Mes informations</legend>
        <label for="civilite">Civilit&eacute; :</label>
        <input type="text" readonly="readonly" name="civilite" id="civilite" value="<?php echo $this->lesInformations->CIVILITE; ?>"></input><br/>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" readonly="readonly" value="<?php echo $this->lesInformations->NOM; ?>"></input><br/>
        <label for="prenom">Pr&eacute;nom :</label>
        <input type="prenom" name="prenom" id="mdp" readonly="readonly" value="<?php echo $this->lesInformations->PRENOM; ?>"></input><br/>
        <label for="mail">E-Mail :</label>
        <input type="text" name="mail" id="mail" readonly="readonly" value="<?php echo $this->lesInformations->ADRESSE_MAIL; ?>"></input><br/>
        <label for="tel">Tel :</label>
        <input type="text" name="tel" id="tel" readonly="readonly" value="<?php echo $this->lesInformations->NUM_TEL; ?>"></input><br/>
        <label for="etudes">Etudes :</label>
        <input type="text" name="etudes" id="etudes" readonly="readonly" value="<?php echo $this->lesInformations->ETUDES; ?>"></input><br/>
        <label for="classe">Classe :</label>
        <input type="text" name="classe" id="classe" readonly="readonly" value="<?php echo $this->lesInformations->FORMATION; ?>"></input><br/>
        <label for="option">Option :</label>
        <input type="text" name="option" id="option" readonly="readonly" value="<?php echo $this->lesInformations->IDOPTIONETUDIANT; ?>"></input><br/>
    </fieldset>
   
</form>
<?php
if (isset($this->message)) {
    echo "<strong>".$this->message."</strong>";
}
?>