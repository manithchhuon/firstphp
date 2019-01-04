<?php
function sur($h,$r){
    $A=0;
    $pi = 3.141592653589;
    $A = 2 * $pi *$r *($r + $h);
    echo "Surface of cylinder is : ".$A;
}
sur(20,5);
?>