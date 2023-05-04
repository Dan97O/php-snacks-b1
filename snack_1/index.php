<?php  
/* 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60
*/

$matches = [
  ["Olimpia Milano", "Cantù", 55, 60],
  ["Virtus Bologna", "Genova", 70, 70],
  ["Firenze", "Torino", 62, 75],
  ["Virtus Roma", "Venezia", 68, 83]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<?php

foreach ($matches as $match) : ?>
<p><?= $match[0] . " - " . $match[1] . " | " . $match[2] . "-" . $match[3]; ?> </p>
<?php endforeach; ?>


</body>
</html>