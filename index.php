<?php
require_once "./Models/Movie.php";

$movie1 = new Movie("Titanic", "en", ["Drama", "Romantic", "Storic"], "9");
$movie2 = new Movie("Avatar", "en", ["Action", "Adventure", "Fantasy"], "10");

$movie1->convertRating();
$movie2->convertRating();

echo '<pre>';
echo '$movie1' . '<br />';
print_r($movie1);

echo '$movie2' . '<br />';
print_r($movie2);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Movie List</title>
</head>

<body>

   <h1>My favourites films of all time!</h1>

   <ol>
      <li>
         <p>Titolo: <?php echo $movie1->getTitle() ?></p>
         <p>Original Language: <?php echo $movie1->getLanguage() ?> </p>
         <p>Genres:
         <ul>
            <?php foreach ($movie1->getGenre() as $item) { ?>
               <li><?php echo $item ?></li>
            <?php } ?>
         </ul>
         </p>
         <p>Rating: <?php echo $movie1->getRating() ?></p>

      </li>

      <li>
         <p>Titolo: <?php echo $movie2->getTitle() ?></p>
         <p>Original Language: <?php echo $movie2->getLanguage() ?> </p>
         <p>Genres:
         <ul>
            <?php foreach ($movie2->getGenre() as $item) { ?>
               <li><?php echo $item ?></li>
            <?php } ?>
         </ul>
         </p>
         <p>Rating: <?php echo $movie2->getRating() ?></p>

      </li>
   </ol>

</body>

</html>