<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../model/database.php';
require '../model/orders_db.php';
require '../model/employee_db.php';
$PageNum = isset($_GET['pagenum']) ? $_GET['pagenum'] : 1;
$orders = select_all_orders($PageNum);
$count = count_orderNum();
?>
<script type="text/javascript" src="../jscript/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../jscript/jqPaginator.js"></script>
<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css"/>

<h1>ALL ORDERS</h1>
<form method="post" action="../view/main_order_details.php">
    <table>
        <thead>
        <th class="allOrderTh" style="margin-left: 10px;margin-right: 10px;width:150px;">ORDER ID</th>
        <th class="allOrderTh" style="margin-left: 10px;margin-right: 10px;width:150px;">PRINCIPAL</th>
        <th class="allOrderTh" style="margin-left: 10px;margin-right: 10px;width:150px;">START DATE</th>
        <th class="allOrderTh" style="margin-left: 10px;margin-right: 10px;width:150px;">DEADLINE</th>
        <th class="allOrderTh" style="margin-left: 10px;margin-right: 10px;width:150px;"></th>
        </thead>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td class="allOrderTh"><?php echo $order['order_id']; ?></td>
                <?php $user_name = select_user($order['principal_id']) ?>
                <td class="allOrderTh"><?php echo $user_name[0]['first_name'] . "  " . $user_name[0]['last_name']; ?></td>
                <td class="allOrderTh"><?php echo $order['order_date']; ?></td>
                <td class="allOrderTh"><?php echo $order['order_deadline']; ?></td>
            <input type="hidden"name='order_id' value='<?php echo $order['order_id']; ?>'/>
            <input type="hidden"name='user_name' value='<?php echo $user_name[0]['first_name'] . "  " . $user_name[0]['last_name']; ?>'/>
            <td><input type="submit" value="DETAILS" /></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p id="p1"></p>
    <ul class="pagination" id="pagination1" style="float: left"></ul>

    <script type="text/javascript">
        $.jqPaginator('#pagination1', {
            totalPages: <?php echo $count[0]['COUNT(1)'] ?>,
            visiblePages: 10,
            currentPage: <?php echo $PageNum; ?>,
            prev: '<li class="prev"><a href="javascript:;">Previous</a></li>',
            next: '<li class="next"><a href="javascript:;">Next</a></li>',
            page: '<li class="page"><a href="javascript:;">{{page}}</a></li>',
            onPageChange: function (num, type) {

                $('#p1').val(num);
                if (type == "change") {
                    window.location.href = '../view/main_all_orders.php?pagenum=' + num;
                }
            }
        });

    </script>
</form>



