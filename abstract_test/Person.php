<?php
    abstract class Person{
        protected $firstName,$lastName;
        public function __construct($firstName,$lastName){
            $this->firstName = $firstName;
            $this->lastName = $firstName;
            
        }
        public function __toString(){
            return sprintf("salary %0.2f",$this->getSalary);
        }
        abstract protected function getSalary(); 
    }
?>