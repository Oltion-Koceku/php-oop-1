<?php 
  // importo la mia classe
 
  require_once __DIR__ . '/Model/Movie.php';
 
  // uso la mia classe

  $first_movie = new Movie('The Avenger', '142' . 'minuti', '2012', 'Josh Whedon', ['azione', 'romanzo', 'giallo']);

  var_dump($first_movie)
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>
</head>
<body>
  <h1>Films</h1>
  <ul>
    <li>
      <?php $first_movie->getFullFilm()  ?>
    </li>
  </ul>
</body>
</html>