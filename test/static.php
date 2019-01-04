<?php
class Number{
    static $tests = 0;
    function __construct($tests){
        Number::$tests++;
    }
    public function getNumber(){
        return Number::$tests;
    }
    public function getAmount(){
        return $this->amount;
    }
}
$num = new Number(8);
$num1 = new Number(9);
$num2 = new Number(9);
echo 
echo Number::$tests;


?>