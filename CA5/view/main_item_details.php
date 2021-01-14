<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../model/database.php';
require '../model/items_db.php';
$itemId = $_POST['itemId'];
$result = select_item_by_id($itemId);
?>
<main>
    <h1><?php echo $itemId ?></h1>

    <form method="post" action="../controller/index.php">
        <input type="hidden" name="action" value="update_item"/>
        <label>PRODUCT ID:</label><br>
        <label style="margin-left: 20px;"><?php echo $itemId ?></label>
        <input type="hidden" name="itemId" value="<?php echo $itemId ?>"/><br>

        <label>PRODUCT NAME:</label><br>
        <input style="margin-left: 20px;" type="text" name="itemName" value="<?php echo $result[0]['item_name'] ?>"/><br>

        <label>PRODUCT PRICE:</label><br>
        <input style="margin-left: 20px;" type="number" step="0.01" name="price" value="<?php echo $result[0]['item_price'] ?>"/><br>

        <label>PRODUCT QUANTITY:</label><br>
        <input style="margin-left: 20px;" type="number" name="quantity" value="<?php echo $result[0]['quatity'] ?>"/><br>

        <input type="submit" value="UPDATE"/>
    </form>
    <!--<form action="../controller/index.php" method="post">
        <input type="hidden" name="action" value="delete_item"/>
        <input type="hidden" name="itemId" value="<?php echo $itemId ?>"/>
        <input type="submit" value="DELETE PRODUCT"/>
    </form>-->

</main>