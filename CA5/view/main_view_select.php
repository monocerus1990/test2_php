



<?php
require '../model/database.php';
require '../model/employee_db.php';
$employees = select_all_users();
?>
<link rel="stylesheet" type="text/css" href="../css/jobsheetcss.css"/>
<main>
    <div class="main_div">
        <form method="get" action="../view/main_view.php">
            <input type="hidden" name="action" value="view_timesheets"/>
            <select name="selected">
                <option>Select Employee</option>
                <?php
                // loop the options of selection
                foreach ($employees as $employee) {
                    //get the full name from database
                    $employee_name = $employee['first_name'] . ' ' . $employee['last_name'];
                    // get id and full name. format: id@full name
                    $employee_detail = $employee['user_id'] . '@' . $employee_name;
                    ?>
                    <!--option value is id@full name-->
                    <option value='<?php echo $employee['user_id']; ?>'><?php echo $employee_name; ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="SUBMIT"/>
        </form><!--ending of form-->
    </div>
</main>

