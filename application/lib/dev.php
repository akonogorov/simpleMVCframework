<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 04.07.2018
 * Time: 18:57
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

function debug($str, $exit){
    echo '<pre>';
    var_dump($str);
    echo '</pre>';

    if (isset($exit) && $exit == 1){
        exit;
    }
}