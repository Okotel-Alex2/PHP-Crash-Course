<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

class Book {
  var $title;
  var $author;
  var $pages;

  function __construct($name){
    echo $name;
  //  echo "New book created <br>";
  }
}

$book1 = new Book("Okotel");
$book1->title = "Learn Object Oriented PHP";
$book1->author = "Alex";
$book1->pages = 100;

$book2 = new Book("New Okotel");
$book1->title = "Learn Object Oriented in JAVA";
$book1->author = "Alex";
$book2->pages = 300;

//echo $book1->author;

 ?>

  </body>
</html>
