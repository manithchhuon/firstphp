<?php
    class Bank{
        protected $accountNum;
        protected $balance;

        public function __construct($accnum,$balance){
            $this->accountNum=$accnum;
            $this->balance=$balance;
        }
        public function getBalance(){
            return $this->balance;
        }
        public function deposit($value){
            $this->balance+=value;
        }
        public function withdraw($value){
            $this->balance-=value;
        }
        public function __toString(){
            return sprintf("Account %s balance %0.2f",$this->accountNum,$this->balance);
        }
    }
    class CheckAccount extends Bank{
        private $fee;
        //fee is use for fee on checking account each time
        public function __construct($accnum,$balance,$fee){
            parent::__construct($accnum,$balance);
            $this->fee=$fee;
        }
        public function deductfee(){
            $this->balance-=$this->fee;
        }
        public function __toString(){
            return sprintf("Checking Account %s balance %0.2f",$this->accountNum,$this->balance);
        }
    }
    class SaveAcc extends Bank{
        private $rate;
        public function __construct($accnum,$balance,$rate){
            parent::__construct($accnum,$balance);
            $this->rate=$rate;
        }
        public function rate(){
            $this->balance += $this->balance * $this->rate / 100;
        }
    }
    // $check = new CheckAccount("90",10000,0.2);
    // $check->deductfee();
    // echo $check;
    $save = new SaveAcc("90",100,10);
    $save->rate();
    echo $save;
?>