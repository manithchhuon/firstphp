<?php
    function day()
    {
        date_default_timezone_set('Asia/Calcutta');
        $time=(int)date('H');
        if ($time > 1 && $time<12) {
            echo "Good morning";
        } 
        if ($time > 12 && $time<17) {
            echo "Good afternoon"; 
            }
        if ($time > 17 && $time <21){
            echo "Good evening";
        } 
        if ($time > 21 && $time<1) {
            echo "Don't say any thing cause teacher don't let me to do!";
        }
    }
     day(); //return function day to display
?>