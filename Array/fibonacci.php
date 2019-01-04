<?php
function fibonaccy($n){
    if($n <= 0){
        return null;
    }
    elseif($n == 1){
        return 0;
    }
    elseif($n == 2){
        return "0 1";
    }
    elseif($n >= 3){
        $u2 = 0;
        $u1 = 1;
        $a = '0 1';
        for($i = 2; $i <= $n; $i ++){
            $un = $u1 + $u2;
            $a = $a.' '.$un;
            $u2 = $u1;
            $u1 = $un;
        }
    }
    return $a;
}
echo "Loop";
echo "<br>";
echo "Fibonacy that has n = 10 : ".fibonaccy(10);
echo "<br>";

function fi_re($n, $u1 = 1, $u2 = 0, $a = '0 1', $i = 2){
    if($n <= 0){
        return null;
    }
    elseif($n == 1){
        return 0;
    }
    elseif($n == 2){
        return "0 1";
    }
    elseif($n >= 3){
        if($i < $n){
            $un = $u1 + $u2;
            $a = $a.' '.$un;
            $u2 = $u1;
            $u1 = $un;
            $i ++;
            $a = fi_re($n, $u1, $u2, $a, $i);
        }
        return $a;
    }
}
echo "Recursive";
echo "<br>";
echo "Fibonacy Rthat has n = 5 = ".fi_re(5);

echo "<br>";
$startTime = round(microtime(true)*1000);
echo $startTime;echo "<br>";
?>