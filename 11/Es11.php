<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 11 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 11</h1>
        <p>Convertire in binario (su 8 bit) un numero intero in base 10 compreso fra 2 e 255 (inclusi).</p>
        <hr>
        <?php
            $num = 6;
            $numBIN = decbin($num);

            echo "Numero in base decimale: $num<br / >";
            echo "<br />Numero in binario: $numBIN";
        ?>
    </body>
</html>