<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

class Student {

  var $name;
  var $major;
  var $gpa;

  function __construct($studentName,$studentMajor,$studentGpa) {

    $this->name  = $studentName;
    $this->major = $studentMajor;
    $this->gpa   = $studentGpa;
  }

  function hasHonors() {
    if($this->gpa >=3.5){
      return "true";
    }else {
      return "false";
    }

  }
}

$student1 = new Student("Alex", "Computer Science", 3.5);
$student2 = new Student("Beaky", "BIST", 3.5);

echo $student1->hasHonors();

 ?>

  </body>
</html>
