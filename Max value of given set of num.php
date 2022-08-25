<?php

$arr=array(1,2,3,56,32,100,23,5);

$large=0;
for($i=0;$i<count($arr);$i++){
    if($arr[$i]>$large){
        $large=$arr[$i];
    }
}
echo $large;
?>