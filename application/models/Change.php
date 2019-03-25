<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 06.07.2018
 * Time: 1:55
 */

namespace application\models;

use application\core\Model;
use application\core\View;


class Change extends Model
{
    public function loadData($id){
        $data = $this->db->row("SELECT * FROM `phone` WHERE `id` = '$id'");
        return $data;
    }
    public function saveData(){
        if ($_POST['model'] && $_POST['price'] && $_POST['id']){

            $name = isset($_POST['company']) ? $_POST['company'] : '';
            $model = isset($_POST['model']) ? $_POST['model'] : '';
            $country = isset( $_POST['country']) ? $_POST['country'] : '';
            $cost = isset($_POST['price']) ? $_POST['price'] : '';
            $guarantee = isset($_POST['guarantee']) ? $_POST['guarantee'] : '';

            $res = $this->db->query("UPDATE phone SET `name` = '$name', `model` = '$model', `country` = '$country', `cost` = '$cost', `guarantee` = '$guarantee' WHERE `id` = '{$_POST['id']}'");
            //debug($res, 1);
        }else{
            View::errorCode(404);
        }
    }
}