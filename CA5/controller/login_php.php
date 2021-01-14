<?php

require '../model/database.php';
require '../model/employee_db.php';

$account = $_POST['account'];
$pwd = $_POST['password'];
$login = login($account, $pwd);

if ($login == "0") {
    session_start();
    $_SESSION["state"] = "0";
    include 'login.php';
} else if ($login == "-1") {
    $_SESSION["state"] = "-1";
    include 'login.php';
} else {
    $_SESSION['state'] = "1";
    $_SESSION["permission"] = substr($login, 0,1);
    $_SESSION["username"] = substr($login,1);
    if($_SESSION["permission"] == 0){
        include '../view/page_employee.php';
    }else{
        include '../view/page_manager.php';
    }
    
}

