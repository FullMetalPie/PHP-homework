<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 1 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 1</h1>
        <p>Scrivere uno script che scambi il contenuto di due variabili.</p>
        <hr>
        <?php
            $variabile1 = 10;
            $variabile2 = 5;
            $variabileScambio;

            echo "Variabile A = $variabile1, variabile B = $variabile2.<br />";
            echo "Effettuo lo scambio delle variabili...";
            $variabileScambio = $variabile1;
            $variabile1 = $variabile2;
            $variabile2 = $variabileScambio;
            echo "<br />Variabile A = $variabile1, variabile B = $variabile2."; 
        ?>
    </body>
</html>