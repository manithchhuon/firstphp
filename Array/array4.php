<?php
    $a = array
    (
    array('a','b','c'),
    array('d','e','f'),
    array('g','h','i'),
    array('j','k','l')
    );
    for ($row=0; $row < 4 ; $row++) { 
        for ($col=0; $col < 3 ; $col++) { 
            echo $a[$row][$col]." ";
        }echo'<br>';
    }
    echo'<br>';
    for ($row=0; $row < 3 ; $row++) { 
        for ($col=0; $col < 4 ; $col++) { 
            echo $a[$col][$row]." ";
        }echo'<br>';
    }
?>