<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
$dsn = "mysql:host=localhost;dbname=workshop";
 * 
 * 
 */
$dsn = "mysql:host=mydbinstance2.ckn3rjukaujj.us-east-1.rds.amazonaws.com;dbname=workshop";
$username = "mysqldbuser";
$password = "mysqldbpassword";



try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    $error_message = $ex->getMessage();
    echo $error_message;
    exit();
}

