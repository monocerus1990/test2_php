




<link rel="stylesheet" type="text/css" href="../css/jobsheetcss.css"/>
<script type="text/javascript" src="../jscript/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../jscript/jquery-ui-1.8.custom.min.js"></script>
<script type="text/javascript" src="../jscript/autocomplete_js.js"></script>
<script type="text/javascript" src="../jscript/caculatetotal_js.js"></script> 
<script type="text/javascript" src="../jscript/addTableRow_js.js"></script> 
<main>
    <div class="main_div">
        <script type="text/javascript">
            function sub() {
                // jquery 表单提交   
                $("#formId").ajaxSubmit(function (message) {
                    // 对于表单提交成功后处理，message为返回内容   
                });
                return false; // 必须返回false，否则表单会自己再做一次提交操作，并且页面跳转   
            }

        </script>
        <form method="get" id="saveReportForm" id="formId"  target="nm_iframe">
            <input type="hidden" name="action" value="save_emp_hours"/>
            <input type="hidden" name="weedending" value="<?php echo $_GET['weedending'] ?>"/>
            <div id="employee_title">
                <label>Employee ID: </label>
                <?php
                $empId = strstr($employee_detail, '@', TRUE);
                echo $empId;
                ?>
                <input type="hidden" name="id" value="<?php echo $empId ?>"/>
                <label id="name_lable">Employee Name: </label>
                <?php echo str_replace('@', '', strstr($employee_detail, '@')); ?>
            </div>
            <table id="tab">
                <tr>
                    <th class="th_short">Saturday</th>
                    <th class="th_short">Sunday</th>
                    <th class="th_short">Monday</th>
                    <th class="th_short">Tuesday</th>
                    <th class="th_short">Wednesday</th>
                    <th class="th_short">Thursday</th>
                    <th class="th_short">Friday</th>
                    <th class="th_short">Weekly</th>
                    <th class="th_lang">Job Sheet Number</th>
                </tr>
                <tr>
                    <th ><input id="Sat" name='Sat' class="text_short" type="number" min="0" max="10" value="0" /></th>
                    <th ><input id='Sun' name='Sun' class="text_short" type="number" min="0" max="10" value="0"/></th>
                    <th ><input id='Mon' name='Mon' class="text_short" type="number" min="0" max="10" value="0"/></th>
                    <th ><input id='Tues' name='Tues' class="text_short" type="number" min="0" max="10" value="0"/></th>
                    <th ><input id='Wed' name='Wed' class="text_short" type="number" min="0" max="10" value="0"/></th>
                    <th ><input id='Thur' name='Thur' class="text_short" type="number" min="0" max="10" value="0"/></th>
                    <th ><input id='Fri' name='Fri' class="text_short" type="number" min="0" max="10" value="0"/></th>
                    <th><input id="lable_input" name = "weekending" readonly="readonly"/></th>
                    <th><input id='to' name="jobsheet" class="text_lang" type="text"/></th>
                    <th>
                        <input type="submit" value="save" onclick="AddTableRow()"/>
                    </th>
                </tr>
            </table>
        </form>
        <iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>
        <table id="total_table">
            <td>
            <th>Total: </th>
            <th id="total1" class="th_short"></th>
            <th id="total2" class="th_short"></th>
            <th id="total3" class="th_short"></th>
            <th id="total4" class="th_short"></th>
            <th id="total5" class="th_short"></th>
            <th id="total6" class="th_short"></th>
            <th id="total7" class="th_short"></th>
            <th id="total8" class="th_lang"></th>
            </td>
        </table>
    </div>
</main>
