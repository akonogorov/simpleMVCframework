<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 05.07.2018
 * Time: 18:02
 */

namespace application\controllers;


use application\core\Controller;

class DescriptionController extends Controller {


    public function getAction(){
        /*$result = $this->model->getInfo($id);*/
        //debug($this->route, 0);
        $result = $this->model->getInfo($this->route['id']);
        $vars = [
          'info' => $result,
        ];
        $this->view->render('Изделие', $vars);
    }

}