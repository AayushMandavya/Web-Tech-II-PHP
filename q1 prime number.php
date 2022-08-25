<?php

function isprime($n)
{
    for($x=2;$x<$n;$x++){
        if($n % $x == 0){
            return 0;
        }
    }
    return 1;
}

$a = isprime(8);
if ($a==0)
echo 'This is not a Prime no'."\n";
else 
echo 'This is a Prime no' ."\n";
?>