<?php  
/* 
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

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
  

<form action="script.php" method="get">
  <label for="name">Nome:</label>
	<input type="text" name="name" id="name"><br>
	<label for="mail">Email:</label>
	<input type="text" name="mail" id="mail"><br>
	<label for="age">Età:</label>
	<input type="text" name="age" id="age"><br>
	<button type="submit">Accedi</button>
</form>


</body>
</html>