<?php

require_once './views/view.php';
require_once './controllers/controllerHome.php';
require_once './controllers/controllerAdmin.php';
require_once './controllers/controllerEnvoyees.php';
require_once './controllers/controllerRecues.php';
require_once './controllers/controller404.php';
require_once './controllers/controllerAbout.php';

class Router {

    private $ctrlEnvoyees;
    private $ctrlRecues;
    private $ctrlHome;
    private $ctrlAdmin;
    private $ctrl404;
    private $ctrlAbout;

    public function __construct() {

        $this->ctrlHome = new controllerHome();
        $this->ctrlAdmin = new controllerAdmin();
        $this->ctrlEnvoyees = new controllerEnvoyees();
        $this->ctrlRecues = new controllerRecues();
        $this->ctrl404 = new controller404();
        $this->ctrlAbout = new controllerAbout();
    }

    public function routerRequete() {
        try {
            if (isset($_GET['type'])) {
                if ($_GET['type'] == 'home') {
                    $this->ctrlHome->showHome();
                } else if ($_GET['type'] == 'recues') {
                    $this->ctrlRecues->showRecues();
                } else if ($_GET['type'] == 'envoyees') {
                    $this->ctrlEnvoyees->showEnvoyees();
                } else if ($_GET['type'] == 'admin') {
                    $this->ctrlAdmin->showAdmin();
                } else if ($_GET['type'] == 'about') {
                    $this->ctrlAbout->showAbout();
                }else
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


