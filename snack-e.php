<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack E</title>
  <style>
    body {
      background: #000;
      color: #fff;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 2rem;
      line-height: 4rem;
    }
  </style>
</head>
<body>
  <h2>Gli studendi più forti</h2>
<?php 
  // Snack E
  // Creare un array contenente qualche alunno di un’ipotetica classe.
  // Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
  // Stampare Nome, Cognome e la media dei voti di ogni alunno.

  $alunni = [
    [
      "nome" => "Lorenzo",
      "cognome" => "Bernardini",
      "voti" => [
        rand(1,10),
        rand(1,10),
        rand(1,10),
        rand(1,10),
        rand(1,10),
      ]
    ],
    [
      "nome" => "Lorenzo",
      "cognome" => "Osnago",
      "voti" => [
        rand(1,10),
        rand(1,10),
        rand(1,10),
        rand(1,10),
        rand(1,10),
      ]
    ],
    [
      "nome" => "Simone",
      "cognome" => "Massaro",
      "voti" => [
        rand(1,10),
        rand(1,10),
        rand(1,10),
        rand(1,10),
        rand(1,10),
      ]
    ],
    [
      "nome" => "Milan",
      "cognome" => "Boh",
      "voti" => [
        rand(1,10),
        rand(1,10),
        rand(1,10),
        rand(1,10),
        rand(1,10),
      ]
    ],
    [
      "nome" => "Alessio",
      "cognome" => "Tomei",
      "voti" => [
        rand(1,10),
        rand(1,10),
        rand(1,10),
        rand(1,10),
        rand(1,10),
      ]
    ],
  ];
  
  for ($i = 0; $i < count($alunni); $i++) {
    $media = array_sum($alunni[$i]["voti"]) / count($alunni[$i]["voti"]);
    echo $alunni[$i]["nome"]." ".$alunni[$i]["cognome"].", media: ".$media."<br>";
  }

?>
</body>
</html>