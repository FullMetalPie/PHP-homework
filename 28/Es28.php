<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 28 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 28</h1>
        <p>Scrivere uno script in grado di ricavare il numero di cifre di un dato intero positivo</p>
        <hr />
        <?php
        $num = random_int(1, 10000);
        echo "<p>Numero randomico: $num<br />";
        echo "Numero di cifre: " . floor(log10($num)) + 1 . "</p>";
        ?>
    </body>
</html>