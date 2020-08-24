<?php
require_once 'models/model.php';

class ModelCard extends Model {

    // Renvoie la liste des cartes envoyees enregistrées dans la bdd
    public function getCardEnvoyees() {
        $sql = 'SELECT * FROM envoyees';
        $card = $this->executerRequete($sql);
        return $card;
    }
    // Renvoie la liste des cartes recues enregistrées dans la bdd
    public function getCardRecues() {
        $sql = 'SELECT * FROM recues';
        $card = $this->executerRequete($sql);
        return $card;
    }

    //Ajouter une carte dans la table envoyees
    public function addCardEnvoyees($id, $city, $country, $lat, $lng, $date, $img){
        $sql = 'INSERT INTO envoyees (`id`, `city`, `country`, `lat`, `lng`, `date`, `img`) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $this->executerRequete($sql, array($id, $city, $country, $lat, $lng, $date, $img));
    }
    //Ajouter une carte dans la table recues
    public function addCardRecues($id, $city, $country, $lat, $lng, $date, $img){
        $sql = 'INSERT INTO recues (`id`, `city`, `country`, `lat`, `lng`, `date`, `img`) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $this->executerRequete($sql, array($id, $city, $country, $lat, $lng, $date, $img));
    }

    //Renvoie les détails d'une carte envoyees
    public function getDetailCardEnvoyees($id) {
        $sql = 'SELECT * FROM envoyees WHERE id=?';
        $card = $this->executerRequete($sql, array($id));
        return $card;
    }
    //Renvoie les détails d'une carte recues
    public function getDetailCardRecues($id) {
        $sql = 'SELECT * FROM recues WHERE id=?';
        $card = $this->executerRequete($sql, array($id));
        return $card;
    }
}
