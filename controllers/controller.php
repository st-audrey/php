<?php

// Classe abstraite Controller.
abstract class Controller {

    protected function getParameter($array, $name) {
        if (isset($array[$name])) {
            return $array[$name];
        }
        else
            throw new Exception("Paramètre '$name' absent");
    }
}