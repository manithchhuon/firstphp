<?php
    $a = array
    (
    array('a','b','c'),
    array('d','e','f'),
    array('g','h','i')
    );
    $b = array
    (
    array('j','k','l'),
    array('m','n','o'),
    array('x','y','z')
    );
    $result = [];
    for ($i=0; $i < 3 ; $i++) 
    { 
        for ($j=0; $j < 3 ; $j++) 
        { 
            echo $a[$i][$j]." ";
        }echo'<br>';
    }
    echo'<br>';
    for ($i=0; $i < 3 ; $i++) 
    { 
        for ($j=0; $j < 3 ; $j++) 
        { 
            echo $b[$i][$j]." ";
        }echo'<br>';
    }
    echo'<br>';
    for ($i=0; $i < 3 ; $i++)
    { 
        for ($j=0; $j < 3 ; $j++) 
        { 
            print_r($r = $a[$i][$j].$b[$i][$j]." ");
            
        }echo'<br>';

    }
    
?>
