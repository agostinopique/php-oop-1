<?php
    require_once __DIR__.'/class.php';
    $movies = [];

    $matrix = new Movie("Matrix", "Wachowski brothers", "Warner Bros", "Keanu Reeves");
    $cowboybebop = new Movie("Cowboy Bebop", "Shin'ichirō Watanabe", "Sunrise", "Spike");

    $movies[] = $matrix;
    $movies[] = $cowboybebop;

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    
    <?php foreach($movies as $movie): ?>    
        <h2><?php echo $movie->getName() ?></h2>
        <ul>
            <?php foreach($movie->getAllInfo() as $key => $value): ?>
                <li><?php echo "$key : $value"?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>