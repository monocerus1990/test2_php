<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function save_timesheet($empId, $jobsheet, $weedending, $mon, $tues, $wed, $thur, $fri, $sat, $sun) {
    global $db;
    $query = "INSERT INTO timesheets (empId, jobSheet, weekEnding, monday, tuesday, wednesday, thursday, friday, saturday, sunday) "
            . "VALUES (:empId, :jobsheet, :weedending, :mon, :tues, :wed, :thur, :fri, :sat, :sun)";
    $statement = $db->prepare($query);
    $statement->bindValue(":empId", $empId);
    $statement->bindValue(":jobsheet", $jobsheet);
    $statement->bindValue(":weedending", $weedending);
    $statement->bindValue(":mon", $mon, PDO::PARAM_INT);
    $statement->bindValue(":tues", $tues, PDO::PARAM_INT);
    $statement->bindValue(":wed", $wed, PDO::PARAM_INT);
    $statement->bindValue(":thur", $thur, PDO::PARAM_INT);
    $statement->bindValue(":fri", $fri, PDO::PARAM_INT);
    $statement->bindValue(":sat", $sat, PDO::PARAM_INT);
    $statement->bindValue(":sun", $sun, PDO::PARAM_INT);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        include '../view/main_select.php';
        exit();
    }
    $statement->closeCursor();
}

function select_timesheets($empId) {
    global $db;
    $query = "SELECT * FROM timesheets WHERE empId = :empId";
    $statement = $db->prepare($query);
    $statement->bindValue(":empId", $empId, PDO::PARAM_STR);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        exit();
    }
    $results = $statement->fetchAll();
    $statement->closeCursor();
    return $results;
}
