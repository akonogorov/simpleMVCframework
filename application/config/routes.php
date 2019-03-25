<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 04.07.2018
 * Time: 19:42
 */

return [
    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
        ],

    'addItem' => [
        'controller' => 'addItem',
        'action' => 'AddItem',
    ],

    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'description/{id:\d+}' => [
        'controller' => 'description',
        'action' => 'get',
    ],

    'save' => [
        'controller' => 'addItem',
        'action' => 'save',
    ],

    'delete/{id:\d+}' => [
        'controller' => 'delete',
        'action' => 'deleteRow',
    ],

    'change/{id:\d+}' => [
        'controller' => 'change',
        'action' => 'changeRow',
    ],

    'saveChanges' => [
        'controller' => 'change',
        'action' => 'saveData',
    ],

    'search' => [
        'controller' => 'search',
        'action' => 'search',
    ],



];