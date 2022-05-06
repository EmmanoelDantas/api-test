<?php
    $db_host = 'localhost';
    $db_name = 'apitest_api';
    $db_user = 'root';
    $db_pass = '';

    $pdo = new PDO("mysql:db_name=$db_name;host=$db_host", $db_user, $db_pass);

    $array = [];