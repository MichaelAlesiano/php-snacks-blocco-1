<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php
$matches = [
  [
    "Squadra 1" => "Orlando Magic",
    "Squadra 2" => "Washington Wizards",
    "Punteggio 1" => 110,
    "Punteggio 2" => 103
  ],
  [
    "Squadra 1" => "Cleveland Cavaliers",
    "Squadra 2" => "Oklahoma City Thunder",
    "Punteggio 1" => 101,
    "Punteggio 2" => 117
  ],
  [
    "Squadra 1" => "New York Knicks",
    "Squadra 2" => "Minnesota Timberwolves",
    "Punteggio 1" => 103,
    "Punteggio 2" => 99
  ],
  [
    "Squadra 1" => "Indiana Pacers",
    "Squadra 2" => "Detroit Pistons",
    "Punteggio 1" => 105,
    "Punteggio 2" => 96
  ],
  [
    "Squadra 1" => "Atlanta Hawks",
    "Squadra 2" => "Denver Nuggets",
    "Punteggio 1" => 123,
    "Punteggio 2" => 115
  ],
  [
    "Squadra 1" => "Los Angeles Clippers",
    "Squadra 2" => "Brooklyn Nets",
    "Punteggio 1" => 108,
    "Punteggio 2" => 112
  ],
  [
    "Squadra 1" => "Milwaukee Bucks",
    "Squadra 2" => "Sacramento Kings",
    "Punteggio 1" => 128,
    "Punteggio 2" => 115
  ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Snack 1</title>
</head>
<body>

  <?php for ($i = 0; $i < count($matches); $i++) {
    $prima_squadra = $matches[$i]["Squadra 1"];
    $seconda_squadra = $matches[$i]["Squadra 2"];
    $punti_squadra1 = $matches[$i]["Punteggio 1"];
    $punti_squadra2 = $matches[$i]["Punteggio 2"];
    ?>
    <div class="">
      <span><?php echo $prima_squadra; ?> -</span>
      <span><?php echo $seconda_squadra; ?> |</span>
      <span><?php echo $punti_squadra1; ?> -</span>
      <span><?php echo $punti_squadra2; ?></span>
    </div>
  <?php } ?>

</body>
</html>
