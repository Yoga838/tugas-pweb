<?php
//create header with styling using tag <center> and <h1>
echo "<center><h1>Praktikum 03 - Introduction to PHP</h2><center>";
//make an varible for looping 
$i= 1;
//using looping with condition (break after variable $i = 100)
while ($i<=100){
    //make a table with bgcolor black for making a solid border and set width of table 40%
    echo "<table bgcolor='black' width='40%'>";
    //make a condition if variable $i modulo 3 equals 0 code will be running
    //the data of each row will be marked according to the variable $i following the loop that occur
    if($i%3 == 0){
        //make an table row with bg color black and font color white and make a table data with widht 7% and font align center 
        echo "<tr bgcolor ='black' style='color:white'><td width='7%'style='text-align :center'><p>$i</p></td><td><p>&nbsp;ini baris ke-$i</p></tr>";
    }
    else{        
        //make an table row with bg color white and make a table data with widht 7% and font align center 
        echo "<tr bgcolor ='white'><td width='7%'style='text-align :center'><p>$i</p></td><td><p>&nbsp;ini baris ke-$i</p></tr>";
    };
    //this is for increments in each iteration of variable $i so the while condition immediately changes to false when it is reached
    $i++;
    //tag for ending the table tag
    echo "</table>";
};
//set the footer using tag <center> to make an center item and using tag <h1> for the content
echo "<center><h1>{212410102031}-{ahmad bagus prayoga}</h1><center>";
//end program bismillah no copas dari temen 🤲🏻
?>