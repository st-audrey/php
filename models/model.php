<?php

 // Classe abstraite Mod�le.
 // Poss�de les m�thodes de connexion et d'execution des requetes SQL
abstract class Model {

    private $bdd;

    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql); // ex�cution directe
        }
        else {
            $resultat = $this->getBdd()->prepare($sql);  // requ�te pr�par�e
            $resultat->execute($params);
        }
        return $resultat;
    }

    private function getBdd() {

		$user='root';
		$password='';
		$dsn='mysql:host=localhost;dbname=mypostcrossing;port=3306;charset=utf8';


        if ($this->bdd == null) {
            // Cr�ation de la connexion
            $this->bdd = new PDO($dsn, $user, $password,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }
}