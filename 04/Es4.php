<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 4 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 4</h1>
        <p>Si scriva uno script che, dato un numero in virgola mobile, visualizzi gli interi ottenuti
        approssimando per difetto e per eccesso.</p>
        <hr>
        <?php
            $num = M_PI;

            echo "Numero: $num <br />";
            echo "<br />Eccesso: " . ceil($num);
            echo "<br />Difetto: " . floor($num);
        ?>
    </body>
</html>