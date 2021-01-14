

<html>
    <head>
        <title>CA5 PROJECT</title>
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css"/>
    </head>
    <body>
        <header>
            FACTIONAL COMPANY
            <p id="welcome">WELCOME<p>
        </header>
        
        <?php
        // $flag = $_SESSION['state'];
        $flag = isset($_SESSION['state']) ? $_SESSION['state'] : null;
        if ($flag == null) {
            echo "<h1></h1>";
        } else if ($flag == 0) {
            echo "<h1>用户不存在！</h1>";
        } else if ($flag == -1) {
            echo "<h1>密码错误！！</h1>";
        } else {
            
        }
        ?>
        <div id="login_div">
            <form action="login_php.php" method="post" id='submitform'>
                <label id="login_label">ACCOUNT:</label><br>
                <input id="login_input"type="text" name="account" value="" required="required"/><br>
                <lable id="login_label">PASSWORD:</lable><br>
                <input id="login_input"type="password" name="password" value="" required="required"/><br><br>
                <input type="submit" value="LOGIN">
                <script type="text/javascript" language="javascript">
                    $("#submitform").on("submit", function (ev) {
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
        </div>
    </body>
<?php include '../view/footer.php';?>
</html>