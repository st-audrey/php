<?php

require_once 'views/view.php';
require_once 'controllers/controller.php';

class ControllerRecues extends Controller  {

    public function showRecues() {
        $view = new Vue("recues");
        $view->generer();
    }
}