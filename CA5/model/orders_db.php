<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function select_all_orders($pageNum) {
    global $db;

    $query = "SELECT * FROM orders ORDER BY order_date LIMIT ".($pageNum-1).",1";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $orders = $statement->fetchAll();
    $statement->closeCursor();
    return $orders;
}

function count_orderNum(){
    global $db;

    $query = "SELECT COUNT(1) FROM orders";
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

function insert_order($order_id, $order_date, $principal_id, $order_deadline) {
    global $db;
    $query = "INSERT INTO orders (order_id, order_date, principal_id, order_deadline )"
            . "VALUES (:order_id, :order_date, :principal_id, :order_deadline)";
    $statement = $db->prepare($query);
    $statement->bindValue(":order_id", $order_id);
    $statement->bindValue(":order_date", $order_date);
    $statement->bindValue(":principal_id", $principal_id);
    $statement->bindValue(":order_deadline", $order_deadline);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //include '../view/main_select.php';
        exit();
    }
    $statement->closeCursor();
}

function update_order_by_id($orderId, $order_date, $order_deadline) {
    global $db;
    $query = "UPDATE orders SET order_date='" . $order_date . "',"
            . "	order_deadline='" . $order_deadline . "' WHERE order_id = '" . $orderId . "'";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //include '../view/main_select.php';
        exit();
    }
    $statement->closeCursor();
}

function select_order_by_id($order_id) {
    global $db;
    $query = "SELECT * FROM orders WHERE order_id = " . $order_id;
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $order = $statement->fetchAll();
    $statement->closeCursor();
    return $order;
}

function delete_by_id($orderId){
    global $db;
    $query = "DELETE FROM orders WHERE order_id='".$orderId."'";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //include '../view/main_select.php';
        exit();
    }
    $statement->closeCursor();
}

function order_statement(){
    global $db;
    $query = "SELECT "
                . "orders.order_id, "
                . "employees.first_name, "
                . "employees.last_name,"
                . "items.item_name,"
                . "items.item_price,"
                . "order_items.quantity "
            . "FROM "
                . "orders,"
                . "employees,"
                . "items,"
                . "order_items "
            . "WHERE "
                . "employees.user_id = orders.principal_id "
            . "AND "
                . "items.item_id = order_items.items_id "
            . "AND "
                . "order_items.order_id = orders.order_id";
    $statement = $db->prepare($query);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        //********************************************
    }
    $orderStatement = $statement->fetchAll();
    $statement->closeCursor();
    return $orderStatement;
    
}
