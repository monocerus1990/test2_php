<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function insert_order_items($order_id,$items_id,$quantity){
    global $db;
    $query = "INSERT INTO order_items (order_id, items_id, quantity)"
            . "VALUES (:order_id, :items_id, :quantity)";
    $statement = $db->prepare($query);
    $statement->bindValue(":order_id", $order_id);
    $statement->bindValue(":items_id", $items_id);
    $statement->bindValue(":quantity", $quantity, PDO::PARAM_INT);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //include '../view/main_select.php';
        exit();
    }
    $statement->closeCursor();
}

function select_item_by_orderId($order_id){
    global $db;
    $query = "SELECT * FROM order_items WHERE order_id = " . $order_id;
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $item = $statement->fetchAll();
    $statement->closeCursor();
    return $item;
    
}

function update_orderItems($orderId,$items_id,$quantity){
    global $db;
    $query = "UPDATE order_items SET items_id='" . $items_id . "',"
            . "	quantity='" . $quantity . "' WHERE order_id = '" . $orderId . "'";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //include '../view/main_select.php';
        exit();
    }
    $statement->closeCursor();
}

function delete_orderItems_by_id($orderId){
    global $db;
    $query = "DELETE FROM order_items WHERE order_id = '".$orderId."'";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //include '../view/main_select.php';
        exit();
    }
    $statement->closeCursor();
}

