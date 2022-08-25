<?php
function factorecursion($number){

    if($number < 2){
        return 1;
    } else {
        return($number *factorecursion($number-1));
    }
}

echo factorecursion(10);

?>