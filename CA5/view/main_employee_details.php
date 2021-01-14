<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../model/database.php';
require '../model/employee_db.php';
$userId=$_POST['userId'];
$AllUsers= select_user($userId);
$user = $AllUsers[0];
?>
<main>
    <h1>USER DETAILS</h1>
    
    <form method="post" action="../controller/index.php">
        <input type="hidden" name="action" value="update_user"/>
        <input type="hidden" name="userId" value="<?php echo $userId;?>"/>
        <label>USER ACCOUNT:</label><br>
        <input style="margin-left: 20px;"type="text" name="account" value="<?php echo $user['user_account']?>"/><br>
        
        <label>USER PASSWORD:</label><br>
        <input style="margin-left: 20px;"type="text" name="password" value="<?php echo $user['password']?>"/><br>
        
        <label>FIRST NAME:</label><br>
        <input style="margin-left: 20px;"type="text" name="firstName" value="<?php echo $user['first_name']?>"/><br>
        
        <label>LAST NAME:</label><br>
        <input style="margin-left: 20px;"type="text" name="lastName" value="<?php echo $user['last_name']?>"/><br>
        
        <label>PERMISSIONS:</label><br>
        <select style="margin-left: 20px;"name="permission">
            <option value="1">Manager</option>
            <option value="0">Employee</option>
        </select><br>
        
        <label>ADDRESS:</label><br>
        <input style="margin-left: 20px;"type="text" name="address" value="<?php echo $user['address']?>"/><br>
        
        <label>MOBILE:</label><br>
        <input style="margin-left: 20px;"style="margin-left: 20px;"type="text" name="mobile" value="<?php echo $user['mobile']?>"/><br>
        
        <input style="margin-left: 20px;"type="submit" value="UPDATE"/>
        
        
    </form>
    
    
</main>

