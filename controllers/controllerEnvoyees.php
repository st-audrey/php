<?php

require_once 'views/view.php';
require_once 'controllers/controller.php';

class ControllerEnvoyees extends Controller  {

    public function showEnvoyees($data) {
        $view = new Vue("envoyees");
        $view->generer(array('cartes' => $data));
    }
}
