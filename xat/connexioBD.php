<?php

// Connecta amb la BD 'my_db'
$con = mysqli_connect("localhost", "root", "", "xat");

// Comprova la connexió
if (mysqli_connect_errno()) {
 echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}

?>