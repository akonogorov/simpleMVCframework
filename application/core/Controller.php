<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 05.07.2018
 * Time: 0:40
 */

namespace application\core;

abstract class Controller {

    public $route;
    public $view;
    public $model;

    public function __construct($route){
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel($name){
        $path = 'application\models\\'.ucfirst($name);
        //debug($path, 0);
        if (class_exists($path)){
            return new $path;
        }
    }

}