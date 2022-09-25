<?php
  /**
   * in this script , greeting message will be shown in multilangual (English "Hello" , German "Hallo" , French "Bonjour!")
   * traits will be defined To inherit multi-similar functions in deffirant classes (here is known as triats) 
   * defining class is referred as person inheriting all down traits
   */
trait English{
  function greet(){
    return "Hello";
  }
}
trait German{
  function greet(){
    return "Hallo";
  }
}
trait French{
  function greet(){
    return "Bonjour!";
  }
}
class Person{
    // using greet function in defferant behaviors according to the action of each one of them
    use English {
      English::greet as engGreet;
    }
    use German {
      German::greet as gerGreet;
    }
    use French {
      French::greet as freGreet;
    }
    // method greet of person class is defined to
      #- return all languages instance of person must be speaked
    function greet(){
      return "this person can speek with there differant languages <br>".
              "<span style= 'color:blue'>In English : </span>".static::engGreet() . "<br>" . 
              "<span style='color:red'>in German : </span>".static::gerGreet() . "<br>" .
              "<span>in french : </span>".static::freGreet() ;
    }
}
