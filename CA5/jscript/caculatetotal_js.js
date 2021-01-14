/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    var text=0;
    $("input[name='Sat']").change(function () {
        
        text = parseInt($("input[name='Sat']").val()) + 
               parseInt($("input[name='Sun']").val()) +
               parseInt($("input[name='Mon']").val()) +
               parseInt($("input[name='Tues']").val()) +
               parseInt($("input[name='Wed']").val()) +
               parseInt($("input[name='Thur']").val()) +
               parseInt($("input[name='Fri']").val()) ;

        $("input[name='weekending']").val(text);

    });
    $("input[name='Sun']").change(function () {

        text = parseInt($("input[name='Sat']").val()) + 
               parseInt($("input[name='Sun']").val()) +
               parseInt($("input[name='Mon']").val()) +
               parseInt($("input[name='Tues']").val()) +
               parseInt($("input[name='Wed']").val()) +
               parseInt($("input[name='Thur']").val()) +
               parseInt($("input[name='Fri']").val()) ;

        $("input[name='weekending']").val(text);

    });
    $("input[name='Mon']").change(function () {
        
        text = parseInt($("input[name='Sat']").val()) + 
               parseInt($("input[name='Sun']").val()) +
               parseInt($("input[name='Mon']").val()) +
               parseInt($("input[name='Tues']").val()) +
               parseInt($("input[name='Wed']").val()) +
               parseInt($("input[name='Thur']").val()) +
               parseInt($("input[name='Fri']").val()) ;

        $("input[name='weekending']").val(text);

    });
    $("input[name='Tues']").change(function () {
        
        text = parseInt($("input[name='Sat']").val()) + 
               parseInt($("input[name='Sun']").val()) +
               parseInt($("input[name='Mon']").val()) +
               parseInt($("input[name='Tues']").val()) +
               parseInt($("input[name='Wed']").val()) +
               parseInt($("input[name='Thur']").val()) +
               parseInt($("input[name='Fri']").val()) ;

        $("input[name='weekending']").val(text);

    });
    $("input[name='Wed']").change(function () {
        
        text = parseInt($("input[name='Sat']").val()) + 
               parseInt($("input[name='Sun']").val()) +
               parseInt($("input[name='Mon']").val()) +
               parseInt($("input[name='Tues']").val()) +
               parseInt($("input[name='Wed']").val()) +
               parseInt($("input[name='Thur']").val()) +
               parseInt($("input[name='Fri']").val()) ;

        $("input[name='weekending']").val(text);

    });
    $("input[name='Thur']").change(function () {
        
        text = parseInt($("input[name='Sat']").val()) + 
               parseInt($("input[name='Sun']").val()) +
               parseInt($("input[name='Mon']").val()) +
               parseInt($("input[name='Tues']").val()) +
               parseInt($("input[name='Wed']").val()) +
               parseInt($("input[name='Thur']").val()) +
               parseInt($("input[name='Fri']").val()) ;

        $("input[name='weekending']").val(text);

    });
    $("input[name='Fri']").change(function () {
        
        text = parseInt($("input[name='Sat']").val()) + 
               parseInt($("input[name='Sun']").val()) +
               parseInt($("input[name='Mon']").val()) +
               parseInt($("input[name='Tues']").val()) +
               parseInt($("input[name='Wed']").val()) +
               parseInt($("input[name='Thur']").val()) +
               parseInt($("input[name='Fri']").val()) ;

        $("input[name='weekending']").val(text);

    });

})

