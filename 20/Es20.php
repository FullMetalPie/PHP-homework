<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 20 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 20</h1>
        <p>Dati i tre lati di un triangolo, calcolarne la superficie applicando la formula di Erone:</p>
        <img src="img.png" />
        <hr>
        <?php
            $lato1 = random_int(2, 6);
            $lato2 = random_int(3, 6);
            $lato3 = random_int(5, 6);
            
            echo "Primo lato: $lato1<br />";
            echo "Primo lato: $lato2<br />";
            echo "Primo lato: $lato3<br/>";

            $superficie = (sqrt(($lato1 + $lato2 + $lato3) * ((-$lato1) + $lato2 + $lato3) * ($lato1 - $lato2 + $lato3) * ($lato1 + $lato2 - $lato3))) / 4;
            echo "<br />Superficie triangolo: " . number_format($superficie, 3);
        ?>
    </body>
</html>