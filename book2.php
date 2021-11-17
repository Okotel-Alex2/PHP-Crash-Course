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

  function __construct($bookTitle,$bookAuthor,$bookPages){
//$this it is a keyword thatis going to refer to the current object
  $this->title = $bookTitle;
  $this->author = $bookAuthor;
  $this->pages = $bookPages;

  //echo $this->pages;
  //echo "$bookPages <br>";
  //echo $this->pages = "New pages = 210 each. <br>";

  }
}

$book1 = new Book("Learn Object Orineted PHP", "Alex", 100);
$book1->title = "New title for book1";

$book2 = new Book("Learn Object Oriented in JAVA", "Okotel", 300);
$book2->title = "New title for Book2";

echo "$book1->title <br>";
echo $book2->title;

 ?>

  </body>
</html>
