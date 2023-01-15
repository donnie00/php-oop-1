<?php
require_once __DIR__ . "/Models/Movie.php";

$movie1 = new Movie("Titanic", "en", "James Cameron", "1998", ["Drama", "Romantic", "Storic"], "9");
$movie2 = new Movie("Avatar", "en", "James Cameron", "2010", ["Action", "Adventure", "Fantasy"], "10");
$movie3 = new Movie("Avengers", "en", "Joss Whedon", "2012", ["Action", "Adventure", "Superhero"], "10");

$movies = [$movie1, $movie2, $movie3];

// echo '<pre>';

// echo '$movieArray' . '<br />';
// print_r($movies);

// echo '</pre>'
//
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Movie List</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>

<body>

   <h1 class="text-center">My favourites films</h1>

   <!-- <div class="container">
      <div class="row justify-content-center">
         <form method="GET" class="col-5">
            <h2>Add new film</h2>
            <div class="row mb-3">
               <div class="col">
                  <label for="filmName" class="form-label">Name</label>
                  <input type="text" class="form-control" name="filmName">
               </div>
               <div class="col">
                  <label for="filmName" class="form-label">Director</label>
                  <input type="text" class="form-control" name="filmDirector">
               </div>
            </div>

            <div class="row mb-3">
               <div class="col">
                  <label for="filmName" class="form-label">Release date</label>
                  <input type="number" class="form-control" name="filmDate">
               </div>

               <div class="col">
                  <label for="filmName" class="form-label">Language</label>
                  <input type="text" class="form-control" name="filmLanguage">
               </div>
               <div class="col">
                  <label for="filmName" class="form-label">Rating</label>
                  <input type="number" class="form-control" min='1' , max='10' name="filmRating">
               </div>
            </div>
            <div class="row mb-3">
               <p>Genres</p>
               <div class="col">
                  <label for="filmName" class="form-label">Action</label>
                  <input type="checkbox" name="filmGenres">

                  <label for="filmName" class="form-label">Horror</label>
                  <input type="checkbox" name="filmGenres">

                  <label for="filmName" class="form-label">Drama</label>
                  <input type="checkbox" name="filmGenres">

                  <label for="filmName" class="form-label">Love</label>
                  <input type="checkbox" name="filmGenres">

                  <label for="filmName" class="form-label">Fantasy</label>
                  <input type="checkbox" name="filmGenres">
               </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
   </div> -->

   <div class="container">
      <div class="row">
         <?php foreach ($movies as $movie) { ?>
            <div class="col-sm-3">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">
                        Titolo: <?php echo $movie->getTitle() ?>
                     </h5>
                     <p class="card-text">
                        Original Language: <?php echo $movie->getLanguage() ?>
                     </p>
                     <p class="card-text">
                        Rating: <?php echo $movie->getRating() ?>
                     </p>
                  </div>
                  <ul class="list-group list-group-flush">
                     <?php foreach ($movie->getGenre() as $item) { ?>
                        <li class="list-group-item"><?php echo $item ?></li>
                     <?php } ?>
                  </ul>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>
</body>

</html>