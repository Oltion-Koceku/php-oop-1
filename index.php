<?php 
  // importo la mia classe
 
  require_once __DIR__ . '/Models/Movie.php';
  require_once __DIR__ . '/Models/Autore.php';
 
  // uso la mia classe

  $first_movie = new Movie('The Avenger', '142' . 'minuti', '2012',new Autore('Stanley Martin', 'Lieber', ' 28 dicembre 1922'), ['azione', 'romanzo', 'giallo']);
  $first_autor = $first_movie->autor->getFullInfo();

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
      <h2>Info film</h2>
      <?php $first_movie->getFullFilm()  ?>
      <h2>Info Autore</h2>
      <?php echo $first_autor ?>
    </li>
  </ul>
</body>
</html>