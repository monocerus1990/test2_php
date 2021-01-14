<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../model/database.php';
require '../model/orders_db.php';
require '../model/employee_db.php';
require '../model/items_db.php';
$employees = select_all_users();
$items = select_all_items();
?>
<script>
    function showMore() {
        var div = document.getElementById("item_div");
        div.style.display = 'block';
    }
</script>

<h1>NEW ORDER</h1>
<form method="post" action="../controller/index.php" id="submitform3">
    <label>PRINCIPAL:</label><br>
    <select name="selected_user" required="required" style="margin-left: 20px;">
        <option>Select Employee</option>
        <?php
// loop the options of selection
        foreach ($employees as $employee) {
            //get the full name from database
            $employee_name = $employee['first_name'] . ' ' . $employee['last_name'];
            // get id and full name. format: id@full name
            $employee_detail = $employee['user_id'];
            ?>
            <!--option value is id@full name-->
            <option value='<?php echo $employee_detail ?>'><?php echo $employee_name; ?></option>
        <?php } ?>
    </select><br>
    <label>START DATE:</label><br>
    <input name="start_date" type="date" required="required" style="margin-left: 20px;"/><br>
    <label>DEADLINE:</label><br>
    <input name="deadline" type="date" required="required" style="margin-left: 20px;"/><br/>
    

    <input type="hidden" name="action" value="add_order"/>
    <label>PRODUCTS:</label><br>
    <table style="margin-left: 20px;">
        <tr>
            <td>
                <select name="selected_items" onchange="showMore()" id="item_select" required="required">
                    <option>Select Item</option>
                    <?php
// loop the options of selection
                    foreach ($items as $item) {
                        //get the full name from database
                        $item_name = $item['item_name'];
                        // get id and full name. format: id@full name
                        //$item_detail = $item['item_id'] . '@' . $item_name;
                        $item_detail = array($item['item_id'], $item['item_name'], $item['item_price'], $item['quatity']);
                        ?>
                        <!--option value is id@full name-->
                        <option value='<?php echo $item['item_id']?>'><?php echo $item_name; ?></option>
                    <?php } ?>
                </select>
                
            </td>
            <td class="td_lang">
                <div style="display: none" id="item_div">
                    <lable>QUANTITY:</lable><input name='quantity'type="text"/>
                    <button>ADD TO ORDER</button>
                </div>
            </td>
        </tr>
    </table>
    <script type="text/javascript" language="javascript">
                $("#submitform3").on("submit", function (ev) {
                    $.ajax({
                        ......
                    });
                    //阻止submit表单提交  
                    ev.preventDefault();
                    //或者return false  
                    //return false;  
                });
            </script>  
</form>


