<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 05.07.2018
 * Time: 0:51
 */

namespace application\core;

class View{

    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route){
        $this->route = $route;
        $this->path = $this->route['controller'].'/'.$route{'action'};
    }

    public function render($title, $vars = []){
        extract($vars);
        $path = 'application/views/'.$this->path.'.php';
        //debug($path, 0);
        if (file_exists($path)){
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'application/views/layouts/'.$this->layout.'.php';
        }
    }

    public static function errorCode($code){
        http_response_code($code);
        $path = 'application/views/errors/'.$code.'.php';
        if (file_exists($path)){
            require $path;
        }
        exit;
    }

    public function redirect($url){
        header('location: '.$url);
        exit;
    }

}