<?php
//Create a loop that runs for a total of 8 times
    for($i=8;$i>=1;$i--){
//Create another loop that runs till the original loop
        for($j=1;$j<=$i;$j++){
            //print the value of variable j that runs till the condition is reached
            echo $j ;
           
        }
        echo "<br>";
    }