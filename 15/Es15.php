<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 15 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 15</h1>
        <p>Si scriva uno script che, dati cinque valori interi, visualizzi la loro media armonica, ovvero il
        reciproco della media aritmetica dei reciproci.</p>
        <hr>
        <?php
            $num1 = random_int(1, 10);
            $num2 = random_int(1, 10);
            $num3 = random_int(1, 10);
            $num4 = random_int(1, 10);
            $num5 = random_int(1, 10);

            echo "Numero 1: $num1;<br />";
            echo "Numero 2: $num2;<br />";
            echo "Numero 3: $num3;<br />";
            echo "Numero 4: $num4;<br />";
            echo "Numero 5: $num5;<br />";

            $denominatore = ((1 / $num1) + (1/ $num2) + (1/ $num3) + (1/ $num4) + (1/ $num5) / 5);

            echo "<br />Media armonica: " . number_format((1 / $denominatore), 2);
        ?>
    </body>
</html>