<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../model/database.php';
require '../model/orders_db.php';
$orderStatement = order_statement();
?>

<main>
    <link rel="stylesheet" type="text/css" href="../css/jobsheetcss.css"/>
    <h1>STATEMENT</h1>
   
        <table id="tab_sta">
            <tr>
                <th style="width: 200px;">Order ID</th>
                <th style="width: 150px;">Principal</th>
                <th style="width: 150px;">Product</th>
                <th style="width: 120px;">Price</th>
                <th style="width: 120px;">Quantity</th>
                <th style="width: 120px;">Total</th>
            </tr>
            <?php
            foreach ($orderStatement as $oneValue) {
                $orderId = $oneValue['order_id'];
                $principal = $oneValue['first_name'] . "  " . $oneValue['last_name'];
                $product = $oneValue['item_name'];
                $price = $oneValue['item_price'];
                $quantity = $oneValue['quantity'];
                $total = $price * $quantity;
                ?>
                <tr>
                    <td class="statementTd"><?php echo $orderId; ?></td>
                    <td class="statementTd"><?php echo $principal ?></td>
                    <td class="statementTd"><?php echo $product; ?></td>
                    <td class="statementTd"><?php echo $price; ?></td>
                    <td class="statementTd"><?php echo $quantity; ?></td>
                    <td class="statementTd"><?php echo $total; ?></td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <br>
        <input style="margin-left: 50px;"type="submit" value="Export to Excel"/>
</main>