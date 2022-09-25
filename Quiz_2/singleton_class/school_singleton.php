<?php
  /**
   * singleton class is class allows to creat only one object Inside itself
   *  // class name is SchoolSingleton
   *      #-- properties 
   *        #- private static schoolName property (saving the name of school)
   *        #- private static schoolAdd property  (saving the address of school)
   *        #- pricate static singleInstance property (saving only one instance of SchoolSingleton)
   *            // why are we using to private and static modifiers 
   *                because private is used to access method and propery from only its own class 
   *                and static can be accessed without creating objects
   *    #-- __construct magic method
   *    - takes two parameters $name and $address to be associated to schoolName and schoolAdd Properties
   *    - its visibility is private to be accessed from only its own class
   *    #-- Methods (actions)
   *      #- getInstance() method
   *          - takes two paremeters ($name , $address) this is public and static 
   *          - check if singleIsntance property contians object or not 
   *            No  , assign new self($name,$address); 
   *      #- getter methods for schoolName and schoolAdd properties 
   *      #- private function __clone tp prevent cloning of object
   */
  class SchoolSingleton{
    ##- properties
    private static $schoolName;
    private static $schoolAdd;
    private static $singleInstance;
    ##- construct method
    private function __construct($name , $address){
      // assing two accepted parameters to $schoolName and $schoolAdd Properties
      self::$schoolName = $name;
      self::$schoolAdd = $address;
    }
    #- method for initializing an object
    public static function getInstance($name , $address){
      if(!(self::$singleInstance instanceof self)){
        $singleInstance = new self($name , $address);
      }
      return $singleInstance;
    }
    #- encapsulation for getting name and address of school
    public static function getSchoolName(){
      return self::$schoolName;
    }
    public static function getSchoolAdd(){
      return self::$schoolAdd;
    }
    // To prevent 
    private function  __clone(){
        
    }
  }