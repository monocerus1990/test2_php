<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function login($account, $pwd) {
    global $db;

    $query = "SELECT * FROM employees WHERE user_account = '". $account."'";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $user = $statement->fetchAll();
    $statement->closeCursor();
    if ($user == null) {
        return "0";
    } else {
        foreach ($user as $key) {
            if ($pwd ==$key['password']) {
                return $key['permissions'].$key['first_name']."  ".$key['last_name'];
            }
        }
    }
    return "-1";
}

function select_user($user_id) {
    global $db;

    $query = "SELECT * FROM employees WHERE user_id = '". $user_id."'";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $user = $statement->fetchAll();
    $statement->closeCursor();
    return $user;
}

function select_all_users() {
    global $db;

    $query = "SELECT * FROM employees ORDER BY first_name";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $users = $statement->fetchAll();
    $statement->closeCursor();
    return $users;
}

function select_all_users_page($pageNum) {
    global $db;

    $query = "SELECT * FROM employees ORDER BY first_name LIMIT ".($pageNum-1).",1";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $users = $statement->fetchAll();
    $statement->closeCursor();
    return $users;
}

function count_userNum(){
    global $db;

    $query = "SELECT COUNT(1) FROM employees";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $count = $statement->fetchAll();
    $statement->closeCursor();
    return $count;
}

function update_user_by_id($userId,$userAccount,$password,$firstName,$lastName,$permission,$address,$mobile) {
    global $db;
    $query = "UPDATE employees SET "
            . "user_account='".$userAccount."',"
            . "password='".$password."',"
            . "first_name='".$firstName."',"
            . "last_name='".$lastName."',"
            . "permissions='".$permission."',"
            . "address='".$address."',"
            . "mobile='".$mobile."' "
            . "WHERE user_id='".$userId."'";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //include '../view/main_select.php';
        exit();
    }
    $statement->closeCursor();
}

function insert_new_user($userId,$userAccount,$password,$firstName,$lastName,$permission,$address,$mobile){
     global $db;
    $query = "INSERT INTO employees (user_id, user_account, password, first_name, last_name, permissions, address, mobile )"
            . "VALUES (:user_id, :user_account, :password, :first_name, :last_name, :permissions, :address, :mobile)";
    $statement = $db->prepare($query);
    $statement->bindValue(":user_id", $userId);
    $statement->bindValue(":user_account", $userAccount);
    $statement->bindValue(":password", $password);
    $statement->bindValue(":first_name", $firstName);
    $statement->bindValue(":last_name", $lastName);
    $statement->bindValue(":permissions", $permission,PDO::PARAM_INT);
    $statement->bindValue(":address", $address);
    $statement->bindValue(":mobile", $mobile);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //include '../view/main_select.php';
        exit();
    }
    $statement->closeCursor();
    
}
