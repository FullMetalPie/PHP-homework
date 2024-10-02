<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 10 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 10</h1>
        <p>Dati due numeri interi, individuare il più piccolo implementando il seguente algoritmo:<br />
            <ol>
                <li>Calcolare la somma dei due numeri (S);</li>
                <li>Calcolare il valore assoluto della differenza dei due numeri (D);</li>
                <li>Ricavare il numero più piccolo calcolando (S - D) / 2</li>
            </ol>
        </p>
        <hr>
        <?php
            $num1 = 10;
            $num2 = 6;

            $s = $num1 + $num2;
            $d = abs($num1 - $num2);

            echo "Numero 1: $num1<br />";
            echo "Numero 2: $num2<br />";

            echo "<br />1. Somma dei numeri (S): $s";
            echo "<br />2. Valore assoluto della differenza (D): $d";
            echo "<br />3. Numero piu' piccolo ((S - D)) / 2 ): " . ($s - $d) / 2;
        ?>
    </body>
</html>