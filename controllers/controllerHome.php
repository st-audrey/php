<?php
	
require_once 'views/view.php';
require_once 'controllers/controller.php';

class ControllerHome extends Controller  {

	public function showHome() {
       $view = new Vue("home");
       $view->generer();
	}	
}