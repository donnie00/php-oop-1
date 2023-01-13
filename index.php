<?php
require_once "./Models/Movie.php";

$movie1 = new Movie("Titanic", "en", "Drama", "10");
$movie2 = new Movie("Avatar", "en", "Action", "7");

$movie1->convertRating();
$movie2->convertRating();

echo '<pre>';
echo '$movie1' . '<br />';
print_r($movie1);
print_r($movie2);
echo '</pre>';
