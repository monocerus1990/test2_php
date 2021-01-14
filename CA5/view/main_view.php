







<?php
$empId = $_GET['selected'];
require '../model/database.php';
require '../model/timesheet_db.php';
$results = select_timesheets($empId);
?>
<link rel="stylesheet" type="text/css" href="../css/jobsheetcss.css"/>
<main>
    <div class="main_div">
        <table>
            <thead>
                <tr>
                    <th class="th_short">Monday</th>
                    <th class="th_short">Tuesday</th>
                    <th class="th_short">Wednesday</th>
                    <th class="th_short">Thursday</th>
                    <th class="th_short">Friday</th>
                    <th class="th_short">Saturday</th>
                    <th class="th_short">Sunday</th>
                    <th class="th_lang">JobSheet Number</th>
                    <th class="th_lang">WeekEnding</th>
                </tr>
            </thead>
            <?php foreach ($results as $result) { ?>
                <tr>
                    <th class="th_short"><?php echo $result['monday'] ?></th>
                    <th class="th_short"><?php echo $result['tuesday'] ?></th>
                    <th class="th_short"><?php echo $result['wednesday'] ?></th>
                    <th class="th_short"><?php echo $result['thursday'] ?></th>
                    <th class="th_short"><?php echo $result['friday'] ?></th>
                    <th class="th_short"><?php echo $result['saturday'] ?></th>
                    <th class="th_short"><?php echo $result['sunday'] ?></th>
                    <th class="th_lang"><?php echo $result['jobSheet'] ?></th>
                    <th class="th_lang"><?php echo $result['weekEnding'] ?></th>
                </tr>
            <?php } ?>
        </table>
    </div>
</main>