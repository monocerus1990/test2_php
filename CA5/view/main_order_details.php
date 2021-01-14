<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$order_id = $_POST['order_id'];
require '../model/database.php';
require '../model/orders_db.php';
require '../model/employee_db.php';
require '../model/order_items_db.php';
require '../model/items_db.php';
$order = select_order_by_id($_POST['order_id']);
$item = select_item_by_orderId($order_id);
$result = select_item_by_id($item[0]['items_id']);
$allItems = select_all_items();
?>
<h1>ORDER DETAILS </h1>
<form action="../controller/index.php" method="post">
    <input type="hidden" name="action" value="update_order" />
    <label >ORDER ID: </label><br>
    <lable  style="margin-left: 20px;"><?php echo $order[0]['order_id'] ?></label><br>
    <input type="hidden" name="orderId" value="<?php echo $order[0]['order_id'] ?>"/>
    
    <label >EMPLOYEE: </label><br>
    <label name="userId" style="margin-left: 20px;"><?php echo $_POST['user_name'] ?></label><br>
    
    <label >START DATE:</label><br>
    <input style="margin-left: 20px;" type="date" name="startDate" value="<?php echo $order[0]['order_date']; ?>"/><br>
    <label >DEADLINE:</label><br>
    <input  style="margin-left: 20px;" type="date" name="deadline" value="<?php echo $order[0]['order_deadline']; ?>"/><br>
    <label>PRODUCT:</label><br>
    <select style="margin-left: 20px;" name="select_item">
        <option value="<?php echo $result[0]['item_id'] ?>"><?php echo $result[0]['item_name']; ?></option>
        <?php foreach ($allItems as $oneItem) : ?>
            <option value="<?php echo $oneItem['item_id'] ?>"><?php echo $oneItem['item_name']; ?></option>
        <?php endforeach ?>
    </select>
    <br>
    <label>QUANTITY:</label><br>
    <input style="margin-left: 20px;" type="number" name="quantity" value="<?php echo $item[0]['quantity'] ?>"/><br>
    <br>
    <input type="submit" value="UPDATE"/>
</form>
<form action="../controller/index.php" method="post">
    <input type="hidden" name="action" value="delete_order"/>
    <input type="hidden" name="orderId" value="<?php echo $order[0]['order_id'] ?>"/>
    <input type="submit" value="DELETE ORDER"/>
</form>

