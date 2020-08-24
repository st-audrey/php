<?php

require_once './views/view.php';
require_once './controllers/controllerHome.php';
require_once './controllers/controllerAdmin.php';
require_once './controllers/controllerEnvoyees.php';
require_once './controllers/controllerRecues.php';
require_once './controllers/controller404.php';
require_once './controllers/controllerAbout.php';
require_once './controllers/controllerCard.php';

class Router {

    private $ctrlEnvoyees;
    private $ctrlRecues;
    private $ctrlHome;
    private $ctrlAdmin;
    private $ctrl404;
    private $ctrlAbout;
    private $ctrlCard;

    public function __construct() {

        $this->ctrlHome = new controllerHome();
        $this->ctrlAdmin = new controllerAdmin();
        $this->ctrlEnvoyees = new controllerEnvoyees();
        $this->ctrlRecues = new controllerRecues();
        $this->ctrl404 = new controller404();
        $this->ctrlAbout = new controllerAbout();
        $this->ctrlCard = new controllerCard();
    }

    public function routerRequete() {
        try {
            if (isset($_GET['type'])) {
                if ($_GET['type'] == 'home') {
                    $this->ctrlHome->showHome();

                } else if ($_GET['type'] == 'envoyees') {
                    $dota = $this->ctrlCard->listerEnvoyees();
                    $this->ctrlEnvoyees->showEnvoyees($dota);

                } else if ($_GET['type'] == 'recues') {
                    $dota = $this->ctrlCard->listerRecues();
                    $this->ctrlRecues->showRecues($dota);


                } else if ($_GET['type'] == 'admin') {


                    if (isset($_GET['action'])) {
                        if ($_GET['action'] == "cartesenvoyees") {
                            $this->ctrlCard->listerEnvoyees();
                        } else if ($_GET['action'] == "cartesrecues") {
                            $this->ctrlCard->listerRecues();
                        }
                    } else
                        $this->ctrlAdmin->showAdmin();

                } else if ($_GET['type'] == 'about') {
                    $this->ctrlAbout->showAbout();
                } else
                    $this->ctrl404->show404();
            }
        }   catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }

    private function error($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}


