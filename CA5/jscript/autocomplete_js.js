/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    //给id为to的控件添加autocomplete
    $("#to").autocomplete({
        source: function (req, add) {
            //从php获取返回的数据库的数据集合
            $.getJSON("../model/jobsheet_db.php", req, function (data) {
                var suggestions = [];
                $.each(data, function (i, val) {
                    suggestions.push(val);
                });
                add(suggestions);
            });
        },
        select: function (e, ui) {
            $("#to").val(ui.item.value);
        }
    }, {max: 5}
    );
});

