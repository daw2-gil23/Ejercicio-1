<?php
setcookie("superheore","spiderman",time()+60);
session_unset();
?>
<html>
 <head>
  <title>Marvel</title>
 </head>
 <body>
    <?php
        echo "Cuanto te gusta Thor del 1 al 10? \n";
        echo $_GET['numero1'];
        echo "<br>";
        echo "Como te gustaria llamarte si fueras un superheroe\n";
        echo $_GET['nombre'];
    ?>
    <form method="post" action="Ejercicio1.1.php">
    <p>Pon tu superheroe favorito
        <input type="text" name="superheroe"/>
    </p>
    <p>Pon otro superheore favorito
        <input type="text" name="superheroe2"/>
    </p>
    <p>
        <input type="submit" name="submit" value="Submit"/>
    </p>
    </form>

    <?php
        echo "Dale a submit para continuar \n";
    ?>
    

 </body>
</html>


