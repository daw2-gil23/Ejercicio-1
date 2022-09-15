<?php
session_start();
$_SESSION['clase'] = "A";
$_SESSION['hora'] = "tarde";

echo "Cual es tu clase? La A o la B";
echo "<br>";
echo $_GET['clase'];
echo "<br>";
echo "A que hora entras a clase? por la tarde o por la mañana?";
echo "<br>";
echo $_COOKIE["hora"];

echo "<br>";
if($_SESSION['clase'] ==  $_GET['clase']){
    echo ("vas a mi misma clase");
}else{
    echo ("no vamos a la misma clase");
}
echo "<br>";
if($_SESSION['hora'] == $_COOKIE["hora"]){
    echo ("vas a la misma hora que yo");
}else{
    echo ("no vas a la misma hora que yo");
}

echo "<br>";
echo ("Cuantos dias tiene este mes=");

date_default_timezone_set('America/New_York');
$month = date('n');
if ($month ==  1) { echo '31'; }
if ($month ==  2) { echo '28 (unless it\'s a leap year)'; }
if ($month ==  3) { echo '31'; }
if ($month ==  4) { echo '30'; }
if ($month ==  5) { echo '31'; }
if ($month ==  6) { echo '30'; }
if ($month ==  7) { echo '31'; }
if ($month ==  8) { echo '31'; }
if ($month ==  9) { echo '30'; }
if ($month == 10) { echo '31'; }
if ($month == 11) { echo '30'; }
if ($month == 12) { echo '31'; }
?>
