<?php
    interface Loggable{
        function logString();
    }
    class Person implements Loggable{
        private $name,$address,$idNumber,$age;
        function __construct($name,$idNumber){
            $this->name=$name;
            $this->idNumber=$idNumber;
        }
        function logString(){
            return"Person name = $this->name <br>ID = $this->idNumber\n";
        }
    }
    class Product implements Loggable {
        private $name,$price,$expiryDate;
        function logString(){
            return"Product name = $this->price = $this->price\n";
        }
    }
    function myLog($obj){
        if($obj instanceof Loggable){
            print $obj->logstring();
        }
        else{
            print "error\n";
        }
    }
    $p = new Person("lala","000");
    myLog($p);
?>