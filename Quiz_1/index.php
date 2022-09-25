<?php 
  // demostrating Entities namespace
  require "Entities/animal.php";
  require "Entities/greeting.php";
  use AnimalSec as animal_section ;
  print "<h4 style = 'text-align:center; padding:10px;'> Animal Class (super class) </h4>";
    ###-- Get instance from Animal class parent
  $lossey_1 = new animal_section\Animal("Dog" , "Dog Food");
  print "Before Modifying Family : ";
  echo $lossey_1->getFamily().PHP_EOL;
  print "<br>";
    #- before modifying family
  $lossey_1->setFamily("Cat");
    #- After modfying family
  print "After Modifying Family : ";
  echo $lossey_1->getFamily();
  print "<br>";
  /////////////////
  print "Beforing Modifying Food : ";
  echo $lossey_1->getFood();
  print "<br>";
  print "After Modifying Food : ";
  $lossey_1->setFood("Cat Food");
  echo $lossey_1->getFood();
  print "<br>";
  ////////////////////////////////////////////////////
  print "<h4 style = 'text-align:center; padding:10px;'> Cow Class (sub class of Animal class) </h4>";
  #two objects of Cow and Lion class as childern of Animal
  $obj_cow_1 = new animal_section\Cow("Cow", "Cow Food" , "Micheal");
  // all getter methods of obj_cow_1 
  print "<p style = 'padding-left:10px;'>Before modifying</p>";
  echo $obj_cow_1->getFamily();
  print "<br>";
  echo $obj_cow_1->getFood();
  print "<br>";
  echo $obj_cow_1->getOwner();
  // all setter method of obj_cow_1
  $obj_cow_1->setFamily("cattle");
  $obj_cow_1->setFood("cattle food");
  $obj_cow_1->setOwner("Chessy");
  print "<p style = 'padding-left:10px;'>After modifying</p>";
  echo $obj_cow_1->getFamily();
  print "<br>";
  echo $obj_cow_1->getFood();
  print "<br>";
  echo $obj_cow_1->getOwner();

  print "<h4 style = 'text-align:center; padding:10px;'> Person Class (inheriting traits) </h4>";

  $Multilangual_Man = new Person();
  print $Multilangual_Man->greet();
  print "<br>";

?>