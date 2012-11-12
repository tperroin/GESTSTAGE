<?php

define('DSN', 'mysql:host=localhost;dbname=GestStage');
define('USER', 'root');
define('MDP', 'root');

abstract class Modele {

    private $pdo;
    protected $nomClasseMetier = 'Enregistrement';
    protected $clePrimaire = 'num';

    /**
     * pdo
     * Crée un objet de type PDO et ouvre la connexion 
     * @return un objet de type PDO pour accéder à la base de données
     */
    function connecter() {
        if (!isset($this->pdo)) {
            /* Connexion à une base via PDO */
            try {
                $this->setPdo(new PDO(DSN, USER, MDP));
            } catch (PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
            }
        }
        return $this->getPdo();
    }

    function deconnecter() {
        $this->setPdo(null);
    }

    // ACCESSEURS et MUTATEURS
    public function getPdo() {
        return $this->pdo;
    }

    public function setPdo($pdo) {
        $this->pdo = $pdo;
    }

}