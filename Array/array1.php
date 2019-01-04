<?php
    $arr = [3,-4,32,-7,10,-23,9,5,345,754,32,23,5,-345,43,45];
    $min = $arr[0];
    $max = $arr[0];   
    for ($i=0; $i < count($arr); $i++) { 
        if ($min >= $arr[$i]) {
            $min = $arr[$i];
        }
        // else{
        //     $min = $arr[$i];
        // }
        if ($max <= $arr[$i]) {
            $max = $arr[$i];
        }
        // else{
        //     $max = $arr[$i];
        // }
    }
    echo $min.'<br>';
    echo $max;
?>
