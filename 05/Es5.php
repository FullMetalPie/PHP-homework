<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 5 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 5</h1>
        <p>Scrivere uno script che, dato un numero con almeno 4 cifre decimali, lo approssimi alla terza cifra
        decimale sempre per difetto.<br />Es.: 123.45678 &#8594 123.456</p>
        <hr>
        <?php
            $num = M_PI;

            echo "Numero: $num <br />";
            echo "Approssimazione: " . (floor($num * 1000)) / 1000;
        ?>
    </body>
</html>