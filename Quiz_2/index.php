<?php
  require "singleton_class/school_singleton.php";
  $object_create = SchoolSingleton::getInstance("SWD School" , "Cario");
  var_dump($object_create);
  echo "<br>";
  // getName
  print $object_create->getSchoolName();
  echo "<br>";
  //getAddress
  print $object_create->getSchoolAdd();
  echo "<br>";
  // again , we try to initialize instance of SchoolSingleton
  $object_create_1 = SchoolSingleton::getInstance("WWS school" , "candian");
  var_dump($object_create_1);
  echo "<br>";
  // getName
  print $object_create_1->getSchoolName();
  echo "<br>";
  //getAddress
  print $object_create_1->getSchoolAdd();