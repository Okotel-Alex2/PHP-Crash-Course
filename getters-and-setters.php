<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
class Movie {
  public $title;
  private $rating;

  function __construct($movieTitle,$movieRating) {
    $this->title = $movieTitle;
    $this->rating = $movieRating;
  }

 function getRating(){
   return $this->rating;
 }

 function setRating($movieRating) {
   $this->rating = $movieRating;
 }

}

$movie = new Movie("Avengers", "PG-13");

//Valid movie ratings G, PG, PG-13, R, NR
$movie->setRating = "Dog";
echo $movie->getRating();
 ?>

  </body>
</html>
