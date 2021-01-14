<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function select_items($pageNum) {
    global $db;

    $query = "SELECT * FROM items ORDER BY item_name LIMIT ".($pageNum-1).",1";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $items = $statement->fetchAll();
    $statement->closeCursor();
    return $items;
}

function count_itemNum(){
    global $db;

    $query = "SELECT COUNT(1) FROM items";
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

function select_all_items() {
    global $db;

    $query = "SELECT * FROM items ORDER BY item_name ";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $items = $statement->fetchAll();
    $statement->closeCursor();
    return $items;
}

function select_item_by_id($item_id){
    global $db;
    $query = "SELECT * FROM items WHERE item_id='".$item_id."'" ;
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $items = $statement->fetchAll();
    $statement->closeCursor();
    return $items;
}

function update_item_by_id($itemId,$itemName,$itemPrice,$quantity) {
    global $db;
    $query = "UPDATE items SET item_name = '".$itemName."'"
            . ",item_price='".$itemPrice."'"
            . ",quatity='".$quantity."' WHERE item_id = '".$itemId."'";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //include '../view/main_select.php';
        exit();
    }
    $statement->closeCursor();
}

function delete_item_by_id($itemId){
    global $db;
    $query = "DELETE FROM items WHERE item_id='".$itemId."'";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //include '../view/main_select.php';
        exit();
    }
    $statement->closeCursor();
}

function insert_item($item_id, $item_name, $item_price, $quatity) {
    global $db;
    $query = "INSERT INTO items (item_id, item_name, item_price, quatity )"
            . "VALUES (:item_id, :item_name, :item_price, :quatity)";
    $statement = $db->prepare($query);
    $statement->bindValue(":item_id", $item_id);
    $statement->bindValue(":item_name", $item_name);
    $statement->bindValue(":item_price", $item_price);
    $statement->bindValue(":quatity", $quatity,PDO::PARAM_INT);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //include '../view/main_select.php';
        exit();
    }
    $statement->closeCursor();
}
