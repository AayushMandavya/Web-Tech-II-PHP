<?php
    //Declare two variables x and y where the values are stored
    $x=10;
    $y=20;
    echo "Before swapping:<br><br>";
    echo "x =".$x."  y=".$y;  

    //Declare a temporary variable to store the value of variable x
    $temp=$x;
    //Swap the value of y into variable x
    $x=$y;
    //Swap the value of variable x this is stored in temporary variable into y
    $y=$temp;
    echo "<br><br>After swapping:<br><br>";  
    echo "x =".$x."  y=".$y;  


?>