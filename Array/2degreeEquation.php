<?
function calc($a, $b, $c)
{
    $delta = pow($b, 2) - 4 * $a * $c;
    $x1;
    $x2;
    if($delta >= 0)
    {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
    }
    else
    {
        $tmpA = -$b/(2 * $a); 
        $tmpB = sqrt(-$delta) / (2 * $a);
        $x1 = "".$tmpA." + ".$tmpB."i";
        $x2 = "".$tmpA." - ".$tmpB."i";
    }

    return array($x1, $x2);
}
$result=calc(7,4,6);
echo "X1 = ".$result[0];
echo '<br>';
echo "X2 = ".$result[1];
?>