<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 06.07.2018
 * Time: 3:11
 */

namespace application\controllers;

use application\core\Controller;

class SearchController extends Controller {

    public function searchAction(){
        $data = $this->model->loadData();
        $vars = [
            'data' => $data,
        ];
        $this->view->render('Поиск', $vars);
    }
}