<?php

include 'connexioBD.php';

//Comprovem el registre
$nom = mysqli_real_escape_string($con, $_POST['nom']);
$missatge = mysqli_real_escape_string($con, $_POST['missatge']);

if (empty($nom)) {
	header("Location: index.php?error=El nom es un valor null. Registre no afegit.");
}
elseif (empty($missatge)) {
	header("Location: index.php?error=El missatge es un valor null. Registre no afegit.");
}
else {
	//Afegim el registre
	date_default_timezone_set('Europe/Madrid');
	$sql = "insert into missatges (usuari, text, hora) values ('$nom', '$missatge', NOW());";
	if (mysqli_query($con, $sql)) {
		header("Location: index.php");
	}
}

// Tanca la connexió
mysqli_close($con);

?>
