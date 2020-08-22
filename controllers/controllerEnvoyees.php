<?php

require_once 'views/view.php';
require_once 'controllers/controller.php';

class ControllerEnvoyees extends Controller  {

    public function showEnvoyees() {
        $view = new Vue("envoyees");
        $view->generer();
    }
}
