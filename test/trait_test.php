<?php
  class Base{
    public function sayHello(){
      echo'hello';
    }
  }
  trait SayWorld{
    public function sayHello(){
      parent::sayHello();
      echo'world <br>';
    }
  }
  class MyHelloWorld extends Base {
    use SayWorld;
  }
  $o = new MyHelloWorld();
  $o->sayHello();
?>
<?php
  trait A{
    public function smallTalk(){
      echo'a<br>';
    }
    public function bigTalk(){
      echo'A<br>';
    }
  }
  trait B{
    public function smallTalk(){
      echo'b<br>';
    }
    public function bigTalk(){
      echo'B<br>';
    }
  }
  class Talker{
    use A,B{
      B::smallTalk insteadof A;
      A::bigTalk insteadof B;
    }
  }
  $a = new Talker();
  $a->bigTalk();
  $a->smallTalk();
?>
<?php
  $greet=function($name){
    printf("Hello%s\r\n",$name);
  };
  $greet('World');
  $greet('PHP');
  $message = 'hello';
  $example = function(){
    echo $message;
  };
  $example();
  $example = function() use ($message){
    echo $message;
  };
  $example();
?>
<?php namespace foo;
class Cat {
  static function says() {echo'meoow';} } ?>
