<?php
class Person{
    private $name,$gender,$age,$status;
    function __construct($name){
        $this->name=$name;
    }
    public function walk(){
        echo $this->name."walk to class"."<br>";
    }
    public function eat(){
        echo $this->name."eat rice"."<br>";
    }
    public function sleep(){
        echo $this->name."sleeps in class"."<br>";
    }
    public function getName(){
        return $this->name;
    }
    public function setName($n){
        $this->name=$n;
    }
}
    $student = new Person("dell ");
    $student->setName("yuth  ");
    // echo $student->getName()."<br>";
    $student->sleep();
    $student->setName("yuth ");
    $student->eat();
?>