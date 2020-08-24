<?php

require_once 'views/view.php';
require_once 'controllers/controller.php';

class ControllerAdmin extends Controller  {

    public function showAdmin($dataE, $dataR) {
        $view = new Vue("admin");
        $view->generer(array('cartesE' => $dataE ,'cartesR' => $dataR));
    }
}
