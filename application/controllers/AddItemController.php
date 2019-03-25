<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 05.07.2018
 * Time: 22:40
 */

namespace application\controllers;

use application\core\Controller;

class AddItemController extends Controller
{
    public function AddItemAction(){
        $this->view->render('Добавить товар');
    }

    public  function saveAction(){
        $this->model->saveData();
        $this->view->redirect('../');
    }
}