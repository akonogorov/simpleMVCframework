<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 05.07.2018
 * Time: 0:49
 */

namespace application\controllers;


use application\core\Controller;

class MainController extends Controller {
    public function indexAction(){
        $result = $this->model->getItems();
        $vars = [
            'item' => $result,
        ];
        $this->view->render('Главная страница', $vars);
    }
}