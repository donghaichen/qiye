<?php

class$tables = Array (
    'navs' => Array (
        'login' => 'char(255) not null',
        'active' => 'bool default 0',
        'customerId' => 'int(10) not null',
        'firstName' => 'char(10) not null',
        'lastName' => 'char(10)',
        'password' => 'text not null',
        'createdAt' => 'datetime',
        'expires' => 'datetime',
        'loginCount' => 'int(10) default 0'
    ),

?>