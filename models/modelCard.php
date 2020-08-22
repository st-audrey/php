<?php
require_once 'models/model.php';

class ModelCard extends Model {

    // Renvoie la liste des cartes enregistrées dans la bdd
    public function getCards() {
    $sql = 'SELECT * FROM card ORDER BY id DESC';
    $card = $this->executerRequete($sql);
    return $card;
    }

    //Ajouter une carte
    public function addCard($date, $adress, $country, $lat, $lng, $img, $ip){
    $sql = 'INSERT INTO message (date, adress, country, lat, flng, content, ip) VALUES (?, ?, ?, ?, ?, ?, ?)';
    $this->executerRequete($sql, array($date, $adress, $country, $lat, $lng, $img, $ip));
    }

    //Renvoie les détails d'une carte
    public function getDetailCard($id) {
    $sql = 'SELECT * FROM card WHERE id=?';
    $card = $this->executerRequete($sql, array($id));
    return $card;
    }
}
