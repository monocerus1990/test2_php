/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var total1 = 0;
var total2 = 0;
var total3 = 0;
var total4 = 0;
var total5 = 0;
var total6 = 0;
var total7 = 0;
var total8 = 0;

function AddTableRow()
{
    var Table = document.getElementById("tab"); //取得自定义的表对象  
    NewRow = Table.insertRow(); //添加行  
    NewCel = NewRow.insertCell();                     //添加列  
    NewCel.innerHTML = "<p align='center'>"+document.getElementById("Sat").value+"</p>";
    total1 += parseInt(document.getElementById("Sat").value);
    
    NewCe2 = NewRow.insertCell();
    NewCe2.innerHTML = "<p align='center'>"+document.getElementById("Sun").value+"</p>";
    total2 += parseInt(document.getElementById("Sun").value);
    
    NewCe3 = NewRow.insertCell();
    NewCe3.innerHTML = "<p align='center'>"+document.getElementById("Mon").value+"</p>";
    total3 += parseInt(document.getElementById("Mon").value);
    
    NewCe4 = NewRow.insertCell();
    NewCe4.innerHTML = "<p align='center'>"+document.getElementById("Tues").value+"</p>";
    total4 += parseInt(document.getElementById("Tues").value);
    
    NewCe5 = NewRow.insertCell();
    NewCe5.innerHTML = "<p align='center'>"+document.getElementById("Wed").value+"</p>";
    total5 += parseInt(document.getElementById("Wed").value);
    
    NewCe6 = NewRow.insertCell();
    NewCe6.innerHTML = "<p align='center'>"+document.getElementById("Thur").value+"</p>";
    total6 += parseInt(document.getElementById("Thur").value);
    
    NewCe7 = NewRow.insertCell();
    NewCe7.innerHTML = "<p align='center'>"+document.getElementById("Fri").value+"</p>";
    total7 += parseInt(document.getElementById("Fri").value);
    
    NewCe8 = NewRow.insertCell();
    NewCe8.innerHTML = "<p align='center'>"+document.getElementById("lable_input").value+"</p>";
    total8 += parseInt(document.getElementById("lable_input").value);
    
    NewCe9 = NewRow.insertCell();
    NewCe9.innerHTML = "<p align='center'>"+document.getElementById("to").value+"</p>";
    
    document.getElementById("total1").innerHTML = total1;
    document.getElementById("total2").innerHTML = total2;
    document.getElementById("total3").innerHTML = total3;
    document.getElementById("total4").innerHTML = total4;
    document.getElementById("total5").innerHTML = total5;
    document.getElementById("total6").innerHTML = total6;
    document.getElementById("total7").innerHTML = total7;
    document.getElementById("total8").innerHTML = total8;
    
}

