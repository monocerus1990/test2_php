<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<main>
    <h1>NEW EMPLOYEE</h1>
    <form method="post" action="../controller/index.php" id="submitform1">
        <input type="hidden" name="action" value="add_user"/>
        <label>USER ACCOUNT:</label><br>
        <input type="text" name="userAccount" required="required"/><br>

        <label>PASSWORD:</label><br>
        <input type="text" name="password" required="required"/><br>

        <label>FIRST NAME:</label><br>
        <input type="text" name="firstName"/><br>
        
        <label>LAST NAME:</label><br>
        <input type="text" name="lastName"/><br>
        
        <label>PERMISSION:</label><br>
        <select name="permission">
            <option value="1">Manager</option>
            <option value="0">Employee</option>
        </select><br>
        
        <label>ADDRESS:</label><br>
        <input type="text" name="address"/><br>
        
        <label>MOBILE:</label><br>
        <input type="test" name="mobile"/><br>

        <input type="submit" value="ADD NEW USER"/>
        <script type="text/javascript" language="javascript">
                $("#submitform1").on("submit", function (ev) {
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