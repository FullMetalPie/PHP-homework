<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 14 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 14</h1>
        <p>Si scriva uno script che, dati quattro numeri, visualizzi la loro media geometrica, ovvero la radice
        n-esima del prodotto di n valori.</p>
        <hr>
        <?php
            $num1 = random_int(1, 6);
            $num2 = random_int(1, 6);
            $num3 = random_int(1, 6);
            $num4 = random_int(1, 6);
            $prodotto = $num1 * $num2 * $num3 * $num4;

            echo "Numero 1: $num1;<br />";
            echo "Numero 2: $num2;<br />";
            echo "Numero 3: $num3;<br />";
            echo "Numero 4: $num4;<br />";

            echo "<br />Media geometrica: " . number_format(sqrt(sqrt($prodotto)), 2);
        ?>
    </body>
</html>