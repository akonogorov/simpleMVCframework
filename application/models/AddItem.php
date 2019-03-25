<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 05.07.2018
 * Time: 22:40
 */

namespace application\models;


use application\core\Model;
use application\core\View;

class AddItem extends Model
{
    public function saveData(){
        if ($_POST['model'] && $_POST['price']){
            $name = isset($_POST['company']) ? $_POST['company'] : '';
            $model = isset($_POST['model']) ? $_POST['model'] : '';
            $country = isset( $_POST['country']) ? $_POST['country'] : '';
            $cost = isset($_POST['price']) ? $_POST['price'] : '';
            $guarantee = isset($_POST['guarantee']) ? $_POST['guarantee'] : '';

            $data = $this->db->query("INSERT INTO phone VALUES ('','$name', '$model', '$country', '$cost', '$guarantee')");
            //debug($data,1);
        }else{
            View::errorCode(404);
        }
    }

}