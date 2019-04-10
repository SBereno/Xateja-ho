<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8" />
<title>xateja-ho!</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<section id="titol">
<h1>xateja-ho!</h1>
</section>
<section id="missatges">
<?php

include 'connexioBD.php';

// Executa una consulta
$result = mysqli_query($con, "SELECT * FROM missatges limit 10");

// Obté el resultat de la consulta com a un array associatiu i processa'l
echo"<table width=\"100%\" border=\"1\">";
echo"<tr>
            <td><b><center>ID</center></b></td>
            <td><b><center>USUARI</center></b></td>
            <td><b><center>TEXT</center></b></td>
            <td><b><center>HORA</center></b></td>
        </tr>
    ";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["usuari"]."</td><td>".$row["text"]."</td><td>".$row["hora"]."</td></tr>";
}
echo"</table>";

// Allibera recursos del resultat de la consulta
mysqli_free_result($result);

// Tanca la connexió
mysqli_close($con);

?>


</section>
<section id="formulari">
<form method="post" action="insertar.php">
<input type="text" size="15" maxlength="50" value="El teu nom" name="nom" style="padding :2px 8px; width: 100%" ><br>
<input type="text" size="15" maxlength="100" value="El teu missatge" name="missatge"style="padding :2px 8px; width: 100%"><br>
<input type="submit" value="Xateja-ho" align="center">
</form>
</section>
<section id="errors">
<?php 
ini_set('display_errors', 0);
echo htmlspecialchars($_GET['error']); 
?>
</section>
</body>
</html>