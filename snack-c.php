<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack C</title>
  <style>
    body {
      background: #000;
      color: #fff;
      font-size: 1.5rem;
      font-family: Arial, Helvetica, sans-serif;
      line-height: 2rem;
    }
  </style>
</head>
<body>
<?php 
  // Snack C
  // Creare un array con 15 numeri casuali,
  // tenendo conto che l’array non dovrà contenere
  // lo stesso numero più di una volta

  $numbers = [];

  for ($i = 0; $i < 15; $i++) {
    $newNumber = rand(1, 99);

    if (in_array($newNumber, $numbers) == false){
      array_push($numbers, $newNumber);
      echo "Numero ".$newNumber." aggiunto all'array. <br>";
    }
  }

  echo "<pre>";
  print_r($numbers);
  echo "</pre>";
?>
</body>
</html>

