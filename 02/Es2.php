<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 2 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 2</h1>
        <p>Si scriva uno script che, dati tre valori interi, visualizzi la loro somma e la loro media aritmetica.</p>
        <hr>
        <?php
            $var1 = 6;
            $var2 = 7;
            $var3 = 8;

            echo "Numero 1: $var1; <br />Numero 2: $var2; <br />Numero 3: $var3.<br />";
            echo "<br />Somma: " . $var1 + $var2 + $var3;
            echo "<br />Media aritmetica: " . ($var1 + $var2 + $var3) / 3;
        ?>
    </body>
</html>