<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 05.07.2018
 * Time: 2:41
 */

namespace application\models;

use application\core\Model;

class Main extends Model {
    public function getItems(){
        $data = $this->db->row('SELECT * FROM phone');
        //debug($data,1);
        return $data;
    }
}