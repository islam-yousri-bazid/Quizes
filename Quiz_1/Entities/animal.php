<?php
namespace AnimalSec;
/**
 * declaring class is referred as Animal wlose members are seperated into
 *  1- attributes
 *        #- family
 *        #- food
 *  2- methods
 *        #- consrtuct magic function ( private string family , private string food )
 *        // encapsulation will be allowed
 *            #- getFamily 
 *            #- setFamily  with one parameter (anim_family)
 *            #- getFood
 *            #- setFood    with one parameter (anim_food)
 */
class Animal{
  // constructor properties promotion
  function __construct(private string $family , private string $food ){

  }
  // encapsulation methods
  function getFamily(){
    #- get value of family whose an instance of animal class or its children
    return $this->family;
  } 
  function setFamily(string $family){
    #- set value of family whose an instance of Animal class or its children
    $this->family = $family;
  } 
  function getFood(){
    #- get value of food whose an instance of animal class or its childern
    return $this->food;
  } 
  function setFood(string $food){
    #- set value of food whose an instance of animal class or its childern
    $this->food = $food;
  }  
}

/**
 * initializing two child class from animal parent
 * Cow child class
 *  #- with the same constructor of parent class but with adding owner property
 *  #- adding getter and setter methods for set and get owner of  instance to be created 
 * Lion child class
 * #-with the same constructor of parent class "Animal"
 */

class Cow extends Animal{
  private $owner;
  function __construct(private string $family , private string $food , $owner){
    parent::__construct( $family  , $food );
    $this->owner = $owner;
  }
  // getting the owner of instance
  function getOwner(){
    return $this->owner;
  }
  // setting the owner of instance
  function setOwner($owner){
    $this->owner = $owner;
  }
}
class Lion extends Animal{
  function __construct(private string $family, private string $food ){
    parent::__construct($family, $food);
  }
}