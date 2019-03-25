<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 05.07.2018
 * Time: 3:05
 */

namespace application\core;

use application\lib\Database;

abstract class Model{

    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }
}