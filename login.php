<?php

session_start(); //inicio del programa

// Suponer que el usuario se autentico
$_SESSION['usuario'] = "Diana";
$_SESSION['rol'] = "Docente";

echo "Sesion iniciada"."<br>";
echo "<a href =  'bienvenida.php'>Ir a la pagina de bienvenida</a>";
?>