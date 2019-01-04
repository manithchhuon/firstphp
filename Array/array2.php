<?php
    $arr = [3,-4,32,-7,1,-23,9];
    $arr1 = [];
    $arr2 = []; 
    for ($i=0; $i < count($arr); $i++) { 
       if ($arr[$i] % 2 == 0) {
           array_push($arr1,$arr[$i]);
           
       }
       else{
        array_push($arr2,$arr[$i]);
        
       }
    }
    print_r($arr1);
    echo "Even array".'<br>';
    print_r($arr2);
    
?>
