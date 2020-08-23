<?php

require_once 'views/view.php';
require_once 'controllers/controller.php';

class ControllerAbout extends Controller  {

    public function showAbout() {
        $view = new Vue("about");
        $view->generer();
    }
}