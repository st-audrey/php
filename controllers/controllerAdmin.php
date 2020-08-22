<?php

require_once 'views/view.php';
require_once 'controllers/controller.php';

class ControllerAdmin extends Controller  {

    public function showAdmin() {
        $view = new Vue("admin");
        $view->generer();
    }
}
