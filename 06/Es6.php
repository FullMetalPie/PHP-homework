<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 6 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 6</h1>
        <p>Scrivere uno script che, dato il prezzo in euro di un articolo in vendita, lo restituisca scontato del
        10%, 25% e 33%.</p>
        <hr>
        <?php
            $prezzo = 141.50;

            echo "Prezzo: $prezzo $<br />";
            echo "<br />Sconto 10%: " . $prezzo - ((10 * $prezzo) / 100) . " $";
            echo "<br />Sconto 25%: " . $prezzo - ((25 * $prezzo) / 100) . " $";
            echo "<br />Sconto 33%: " . $prezzo - ((33 * $prezzo) / 100) . " $";
        ?>
    </body>
</html>