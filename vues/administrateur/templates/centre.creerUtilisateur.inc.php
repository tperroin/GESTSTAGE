<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<form method="post" action=".?controleur=administrateur&action=validationcreerutilisateur&id=<?php echo $this->id; ?>">
    <fieldset>
        <legend>Ses informations g&eacute;n&eacute;rales</legend>
        <label for="id">id</label>
        <input type="text" readonly="readonly" name="id" id="id"></input>
        <label for="civilite">Civilit&eacute; :</label>
        <select type="select" name="civilite" id="civilite">
            <option>Monsieur</option>
            <option>Madame</option>
            <option>Mademoiselle</option>
        </select>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"></input><br/>
        <label for="prenom">Pr&eacute;nom :</label>
        <input type="prenom" name="prenom" id="mdp"></input><br/>
        <label for="mail">E-Mail :</label>
        <input type="text" name="mail" id="mail"></input><br/>
        <label for="tel">Tel :</label>
        <input type="text" name="tel" id="tel"></input><br/>
        <label for="etudes">Etudes :</label>
        <select type="select" name="etudes" id="etudes">
        <?php
            foreach ($this->lesFormations as $formations) { 
                   echo'<option>'.$formations->LIBELLEFILIERE.'</option>';   
            }
        ?>
        </select>
        <label for="classe">Classe :</label>
        <select type="select" name="classe" id="classe">
        <?php
            foreach ($this->lesClasses as $classes) { 
                   echo'<option>'.$classes->NOMCLASSE.'</option>';   
            }
        ?>
        </select>
        <label for="option">Option :</label>
        <select type="select" name="option" id="option">
        <?php
            foreach ($this->lesOptions as $option) { 
                   echo'<option>'.$option->LIBELLECOURTOPTION.'</option>';   
            }
        ?>
        </select>
    </fieldset>
    <fieldset>
        <legend>Ses identifiants de connexion</legend>
        <label for="login">Login :</label>
        <input type="text" name="login" id="login"></input><br/>
        <label for="mdp">Mot de passe :</label>
        <input type="text" name="mdp" id="mdp"></input><br/>
        <label for="role">R&ocirc;le :</label>
        <select type="select" name="role" id="role">
        <?php
            foreach ($this->lesRoles as $role) { 
                   echo'<option>'.$role->LIBELLE.'</option>';   
            }
        ?>
        </select>
        
    </fieldset>
    <fieldset>
        <input type="submit" value="Cr&eacute;er l'utilisateur" ></input>
        <input type="button" value="Retour" onclick="history.go(-1)">
    </fieldset>
</form>
<?php
if (isset($this->message)) {
    echo "<strong>".$this->message."</strong>";
}
?>