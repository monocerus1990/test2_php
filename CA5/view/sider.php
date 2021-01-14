



<script>
    function all_orders() {
        window.parent.document.getElementById("myIframe").contentWindow.location.href = "../view/main_all_orders.php";
    }
    function new_order() {
        window.parent.document.getElementById("myIframe").contentWindow.location.href = "../view/main_new_order.php";
    }
    function all_products() {
        window.parent.document.getElementById("myIframe").contentWindow.location.href = "../view/main_all_item.php";
    }
    function new_products() {
        window.parent.document.getElementById("myIframe").contentWindow.location.href = "../view/main_new_item.php";
    }
    function all_employee() {
        window.parent.document.getElementById("myIframe").contentWindow.location.href = "../view/main_all_employee.php";
    }
    function new_employee() {
        window.parent.document.getElementById("myIframe").contentWindow.location.href = "../view/main_new_employee.php";
    }
    function display_jobsheet() {
        window.parent.document.getElementById("myIframe").contentWindow.location.href = "../view/main_view_select.php";
    }
    function new_jobsheet() {
        window.parent.document.getElementById("myIframe").contentWindow.location.href = "../view/main_select.php";
    }
    function display_statement() {
        window.parent.document.getElementById("myIframe").contentWindow.location.href = "../view/main_statement.php";
    }
</script>
<aside>
    <?php
    if ($_SESSION['permission'] == 1) {
        $hidden = "block";
    } else {
        $hidden = "none";
    }
    ?>
    <nav>
        <ul style="margin-top: 40px;">
            <li class="first_li">Orders</li>
            <li>
                <ul class="second_ul">
                    <li class="second_li"><a onclick="all_orders()">Display Orders</a></li>
                    <li class="second_li"><a onclick="new_order()">New Order</a></li>
                </ul>
            </li>
            <li class="first_li"style='display: <?php echo $hidden ?>;'>Products</li>
            <li>
                <ul class="second_ul">
                    <li class="second_li"><a onclick="all_products()">Display Products</a></li>
                    <li class="second_li"><a onclick="new_products()">New Products</a></li>
                </ul>
            </li>
            <li class="first_li"style="display: <?php echo $hidden ?>;">Employees</li>
            <li>
                <ul class="second_ul">
                    <li class="second_li"><a onclick="all_employee()">Display Employees</a></li>
                    <li class="second_li"><a onclick="new_employee()">New Employees</a></li>
                </ul>
            </li>
            <li class="first_li">Jobsheet</li>
            <li>
                <ul class="second_ul">
                    <li class="second_li"><a onclick="display_jobsheet()">Display Jobsheet</a></li>
                    <li class="second_li"><a  onclick="new_jobsheet()">Enter Jobsheet</a></li>
                </ul>
            </li>
            <li class="first_li"style="display: <?php echo $hidden ?>;"><a style="color: black;" onclick="display_statement()">Statement</a></li>
        </ul>

    </nav>

</aside>
