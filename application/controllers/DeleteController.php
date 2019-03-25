<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 06.07.2018
 * Time: 1:05
 */

namespace application\controllers;

use application\core\Controller;

class DeleteController extends Controller
{
    public function deleteRowAction(){
        //debug($this->route['id'],1);
        $result = $this->model->deleteRow($this->route['id']);
        $this->view->redirect('../');
    }
}