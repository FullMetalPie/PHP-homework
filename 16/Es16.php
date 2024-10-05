<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 16 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 16</h1>
        <p>Scrivere uno script che, dato un tempo espresso in secondi, restituisca l’equivalente in ore, minuti
        e secondi. <br />
        Es.: 7384 secondi corrispondono a 2 ore, 3 minuti e 4 secondi.
        </p>
        <hr>
        <?php
            $secondi = 7384;

            echo "Secondi: $secondi<br />";

            $ore = $secondi / 3600;
            $minuti = ($secondi % 3600) / 60; 
            $secondiRimanenti = ($secondi % 3600) % 60;

            echo "<br />Ore: " . floor($ore);
            echo "<br />Minuti: " . floor($minuti);
            echo "<br />Secondi: " . $secondiRimanenti;
        ?>
    </body>
</html>