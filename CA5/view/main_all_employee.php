<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../model/database.php';
require '../model/employee_db.php';
$PageNum = isset($_GET['pagenum']) ? $_GET['pagenum'] : 1;
$allUsers = select_all_users_page($PageNum);
$count = count_userNum();
?>
<main>
    <script type="text/javascript" src="../jscript/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../jscript/jqPaginator.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>
    <h1>ALL EMPLOYEES</h1>
    <form method="post" action="../view/main_employee_details.php">

        <table>
            <thead>
            <th style="width:150px;margin-left: 10px;margin-right: 10px;">USER ID</th>
            <th style="width:100px;margin-left: 10px;margin-right: 10px;">ACCOUNT</th>
            <th style="width:150px;margin-left: 10px;margin-right: 10px;">PASSWORD</th>
            <th style="width:70px;margin-left: 10px;margin-right: 10px;">FIRST.N</th>
            <th style="width:70px;margin-left: 10px;margin-right: 10px;">LAST.N</th>
            <th style="width:100px;margin-left: 10px;margin-right: 10px;">PER</th>
            <th style="width:200px;margin-left: 10px;margin-right: 10px;">ADDRESS</th>
            <th style="width:100px;margin-left: 10px;margin-right: 10px;">MOBILE</th>
            </thead>
            <?php foreach ($allUsers as $user) : ?>
                <tr>
                    <td>
                        <?php echo $user['user_id'] ?>
                    </td>
                    <td>
                        <?php echo $user['user_account'] ?>
                    </td>
                    <td>
                        <?php echo $user['password'] ?>
                    </td>
                    <td>
                        <?php echo $user['first_name'] ?>
                    </td>
                    <td>
                        <?php echo $user['last_name'] ?>
                    </td>
                    <td>
                        <?php
                        if ($user['permissions'] == 1) {
                            echo "Manager";
                        } else {
                            echo "Employee";
                        }
                        ?>
                    </td>
                    <td>
                        <?php echo $user['address'] ?>
                    </td>
                    <td>
                        <?php echo $user['mobile'] ?>
                    </td>
                <input type="hidden"name='userId' value='<?php echo $user['user_id'] ?>'/>
                <td><input type="submit" value="DETAILS" /></td>
                </tr>
            <?php endforeach; ?>
        </table>


        <p id="p3"></p>
        <ul class="pagination" id="pagination3"></ul>

        <script type="text/javascript">
            $.jqPaginator('#pagination3', {
                totalPages: <?php echo $count[0]['COUNT(1)'] ?>,
                //visiblePages: 10,
                visiblePages: 10,
                currentPage: <?php echo $PageNum; ?>,
                prev: '<li class="prev"><a href="javascript:;">Previous</a></li>',
                next: '<li class="next"><a href="javascript:;">Next</a></li>',
                page: '<li class="page"><a href="javascript:;">{{page}}</a></li>',
                onPageChange: function (num, type) {
                    //                $('#p2').text(type + '：' + num);
                    if (type == "change") {
                        window.location.href = '../view/main_all_employee.php?pagenum=' + num;
                    }
                }
            });

        </script>

    </form>

</main>

