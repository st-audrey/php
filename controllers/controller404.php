<?php

require_once 'views/view.php';
require_once 'controllers/controller.php';

class Controller404 extends Controller  {

    public function show404() {
        $view = new Vue("404");
        $view->generer();
    }
}
