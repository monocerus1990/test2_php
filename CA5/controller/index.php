


<?php

require '../model/database.php';
require '../model/orders_db.php';
require '../model/order_items_db.php';
require '../model/items_db.php';
require '../model/employee_db.php';
require '../model/timesheet_db.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'login_page';
    }
}

switch ($action) {
    case 'login_page':
        break;
//        $employee_detail = $_GET['selected'];
//        include '../view/main_enter.php';
        break;
    case 'add_order':
        $order_id = 'Or'.date('ymdhis',time());
        $order_date = $_POST['start_date'];
        $principal_id = $_POST['selected_user'];
        $order_deadline = $_POST['deadline'];
        insert_order($order_id, $order_date, $principal_id, $order_deadline);
        
        $item_id = $_POST['selected_items'];
        $quantity = $_POST['quantity'];
        insert_order_items($order_id, $item_id, $quantity);
        include '../view/Confirmed.php';
        break;
     case 'update_order':
         $orderId=$_POST['orderId'];
         $order_date=$_POST['startDate'];
         $order_deadline=$_POST['deadline'];
         update_order_by_id($orderId, $order_date, $order_deadline);
         $items_id=$_POST['select_item'];
         $quantity=$_POST['quantity'];
         update_orderItems($orderId, $items_id, $quantity);
        include '../view/Confirmed.php';
        break;
    case 'delete_order':
        $orderId=$_POST['orderId'];
        delete_by_id($orderId);
        delete_orderItems_by_id($orderId);
        include '../view/Confirmed.php';
        break;
    case 'update_item':
        $itemId=$_POST['itemId'];
        $itemName=$_POST['itemName'];
        $itemPrice=$_POST['price'];
        $quantity=$_POST['quantity'];
        update_item_by_id($itemId, $itemName, $itemPrice, $quantity);
        include '../view/Confirmed.php';
        break;
    case 'delete_item':
        $itemId=$_POST['itemId'];
        delete_item_by_id($itemId);
        include '../view/Confirmed.php';
        break;
    case 'add_item':
        $itemId = 'Ite'.date('ymdhis',time());
        $item_name=$_POST['itemName'];
        $item_price=$_POST['itemPrice'];
        $quatity=$_POST['itemQuantity'];
        insert_item($itemId, $item_name, $item_price, $quatity);
        include '../view/Confirmed.php';
        break;
    case 'update_user':
        $userId=$_POST['userId'];
        $userAccount=$_POST['account'];
        $password=$_POST['password'];
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $permission=$_POST['permission'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        update_user_by_id($userId, $userAccount, $password, $firstName, $lastName, $permission, $address, $mobile);
        include '../view/Confirmed.php';
        break;
    case 'add_user':
        $userId='U'.date('ymdhis',time());
        $userAccount=$_POST['userAccount'];
        $password=$_POST['password'];
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $permission=$_POST['permission'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        insert_new_user($userId, $userAccount, $password, $firstName, $lastName, $permission, $address, $mobile);
        include '../view/Confirmed.php';
        break;
    case 'enter_emp_hours':
        $employee_detail = $_GET['selected'];
        include '../view/main_enter.php';
        break;
    case 'save_emp_hours':
        $empId = $_GET['id'];
        $jobsheet = $_GET['jobsheet'];
        $weedending = $_GET['weedending'];
        $mon = $_GET['Mon'];
        $tues = $_GET['Tues'];
        $wed = $_GET['Wed'];
        $thur = $_GET['Thur'];
        $fri = $_GET['Fri'];
        $sat = $_GET['Sat'];
        $sun = $_GET['Sun'];
        save_timesheet($empId, $jobsheet, $weedending, $mon, $tues, $wed, $thur, $fri, $sat, $sun);
        break;
}
