<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 06.07.2018
 * Time: 1:55
 */

namespace application\controllers;


use application\core\Controller;

class ChangeController extends Controller
{
    public function changeRowAction(){
        $result = $this->model->loadData($this->route['id']);
        //debug($result, 1);
        $vars = [
            'data' => $result,
        ];
        //debug($vars, 1);
        $this->view->render('Изменить товар', $vars);
    }

    public function saveDataAction(){
        $this->model->saveData();
        $this->view->redirect('../');
    }
}