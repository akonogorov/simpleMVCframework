<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 06.07.2018
 * Time: 1:06
 */

namespace application\models;


use application\core\Model;
use application\core\View;

class Delete extends Model
{
    public function deleteRow($id){
        //debug('1', 1);
        if ($id){
            $res = $this->db->query("DELETE FROM phone WHERE id = '$id' ");
            //debug($res,1);
        }
    }
}