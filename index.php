<?php

  require_once __DIR__ . "/classes/Movie.php";

  $ironMan = new Movie("Iron Man", 2008, 7.9);
  $ironMan->setBoxOffice(98618668);

  $ratatuille = new Movie("Ratatuille", 2007);

  $olympusHasFallen = new Movie("Olympus Has Fallen", 2013, 6.5);
  $olympusHasFallen->setBoxOffice(30373794);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>php-oop-1</title>
</head>

<body>

  <h1>Movies</h1>

  <h5>Movies scheduled for today: <?php echo Movie::getCounter() ?></h5>

  <div class="movie-container">
    
    <h3>
      First movie today will be <?php echo $ironMan->title ?>
    </h3>
    <h4>
      Year: <?php echo $ironMan->year ?>
    </h4>
    <h4>
      First weekend registered <?php echo $ironMan->getBoxOffice() ?>$ at the box office.
    </h4>
    <h4>
      Recommended: <?php echo $ironMan->getRecommended() ?>
    </h4>
    
  </div> 

  <div class="movie-container">
    
    <h3>
      To follow: <?php echo $ratatuille->title ?>
    </h3>
    <h4>
      Year: <?php echo $ratatuille->year ?>
    </h4>
    <h4>
      First weekend registered <?php echo $ratatuille->getBoxOffice() ?>$ at the box office.
    </h4>
    <h4>
      Recommended: <?php echo $ratatuille->getRecommended() ?>
    </h4>

  </div>

  <div class="movie-container">
    
    <h3>
      And last: <?php echo $olympusHasFallen->title ?>
    </h3>
    <h4>
      Year: <?php echo $olympusHasFallen->year ?>
    </h4>
    <h4>
      First weekend registered <?php echo $olympusHasFallen->getBoxOffice() ?>$ at the box office.
    </h4>
    <h4>
      Recommended: <?php echo $olympusHasFallen->getRecommended() ?>
    </h4>

  </div>
  
</body>
</html>