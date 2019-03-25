<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 05.07.2018
 * Time: 18:01
 */

namespace application\models;


use application\core\Model;

class Description extends Model{

    public function getInfo($id){
        $data = $this->db->row("SELECT * FROM phone WHERE id = $id");
        return $data;
    }
}