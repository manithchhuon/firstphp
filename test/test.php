<?php
class Dog{
    private $name="kiki";
    public function bark(){
        // $name="test : ";
        // echo $name."wooff"."<br>";
        echo $this->name."says woofs";
    }
    public function getName(){
        return $this->name;
    }
    public function setName($n){
        $this->name=$n;
    }
    public function bite(){
        echo $this->getName()."bites s.o";
    }
    
}

    $person = new Dog();
    // $person->name ="friend yerng : ";
    $person->setName("prus ");
    echo $person->getName()."<br>";
    // echo $person->name;
    $person->bite();
    echo "<br>";
    $dog1 = new Dog();
    $dog1->setName("kiki ");
    $dog2 = new Dog();
    $dog2=$dog1;
    $dog2->setName("bobo ");
    $dog1->bark();
?>