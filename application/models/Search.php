<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 06.07.2018
 * Time: 3:12
 */

namespace application\models;

use application\core\Model;
use application\core\View;

class Search extends Model {

    public function loadData(){

        if ($_POST['search']){
            $string = $_POST['search'];
            $string = explode(" ", $string);
            $query = $this->createQuery($string);
            $data = $this->db->query($query);
            return $data;
        }else{
            View::errorCode(404);
        }
    }

    public function createQuery($string){
        $query = "SELECT * FROM `phone` WHERE ";
        for ($i=0; $i < count($string); $i++){
           // echo $i." ".$query;
            if ($i != (count($string) - 1)){
                $query .= 'model LIKE \'%'.$string[$i].'%\' AND ';
            }else{
                $query .= 'model LIKE \'%'.$string[$i].'%\'';
            }
        }
        return $query;
    }
}