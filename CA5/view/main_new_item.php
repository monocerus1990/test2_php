<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<main>
<h1>NEW PRODUCT</h1>
<form method="post" action="../controller/index.php" id="submitform2">
    <input type="hidden" name="action" value="add_item"/>
    <label>PRODUCT NAME:</label><br>
    <input style="margin-left: 20px;"type="text" name="itemName" required="required"/><br>

    <label>PRODUCT PRICE:</label><br>
    <input style="margin-left: 20px;" type="number" step="0.01" name="itemPrice" required="required"/><br>

    <label>PRODUCT QUANTITY:</label><br>
    <input style="margin-left: 20px;" type="number" name="itemQuantity" required="required"/><br>
    
    <input type="submit" value="ADD NEW PRODUCT"/>
    <script type="text/javascript" language="javascript">
                $("#submitform2").on("submit", function (ev) {
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
</main>

