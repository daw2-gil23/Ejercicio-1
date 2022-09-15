<?php
session_start();
setcookie("hora","tarde",time()+60);
echo "Me llamo:";
echo $_COOKIE["usuario"];
echo "<br>";
echo "Cual es tu nombre: \n";

$nombre = $_GET['nombre'] ?? 'Luna';

echo $nombre;


echo "<br>";
echo "Mi peli favorita es \n";
echo $_GET['pelisuperheroe'];
echo "<br>";

echo "<a href='Ejercicio1.3.php?clase=B'>";
echo "dale para saber mas datos"; 
echo "</a>";

?>
