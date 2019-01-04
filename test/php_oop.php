<?php
class Animal{
    public $name="kiki ";
    private $weight="18";
    protected $height="15";
    public function makesound(){
        echo $this->name."wuuhh"."<br>";
    }
}
class Birds extends Animal{
    public function testBird(){
        echo $this->height;
    }
}
$bird = new Birds();
$bird->testBird();
    // $dog = new Animal();
    // echo $dog->weight;
    // echo $dog->name;
    // echo $dog->height;
?>