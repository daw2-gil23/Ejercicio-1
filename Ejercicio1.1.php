<?php
session_start();
setcookie("usuario","Maria",time()+60);
$_SESSION['superheroe'] = $_POST['superheroe'];
$_SESSION['superheroe2'] = $_POST['superheroe2'];

if (($_SESSION['superheroe'] == 'Spiderman') or
    ($_SESSION['superheroe2'] == 'Spiderman') or 
    ($_SESSION['superheroe'] == 'spiderman') or 
    ($_SESSION['superheroe2'] == 'spiderman')) {
    $_SESSION['authuser'] = 1;
    echo "Mi supeheroe favorito tambien es Spiderman";
    echo "<br>";
}else {
    if (($_SESSION['superheroe'] == 'Ironman') or
    ($_SESSION['superheroe2'] == 'Ironman') or 
    ($_SESSION['superheroe'] == 'ironman') or 
    ($_SESSION['superheroe2'] == 'ironman')) {
    $_SESSION['authuser'] = 1;
    echo "Ironman es mi segundo superheroe favorito el primero es spiderman";
    echo "<br>";
    } else {
    echo 'Vaya tu superheore favorito no conicide con el mio';
    echo "<br>";
    }   
}
$pelisuperheroe = urlencode("Spider-Man = No Way Home");
echo "<a href='Ejercicio1.2.php?pelisuperheroe=$pelisuperheroe'>";
echo "dale para saber mi nombre"; 
echo "</a>";


?>