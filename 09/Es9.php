<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 9 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 9</h1>
        <p>Siano dati due numeri interi di due cifre ab e cd, dove ogni lettera rappresenta nell’ordine una singola cifra (se ab è pari a 74, a vale 7 e b vale 4). 
            <br />Moltiplicare fra di loro i due numeri implementando l’algoritmo di Karatsuba:<br /> ab · cd = a · c · 10<sup>2</sup> + (a · c + b · d - (a - b) · (c - d)) · 10 + b · d</p>
        <hr>
        <?php
            $numAB = 11;
            $numA = floor($numAB / 10);
            $numB = floor(($numAB - $numA * 10));

            $numCD = 54;
            $numC = floor($numCD / 10);
            $numD = floor(($numCD - $numC * 10));

            echo "Numero AB = $numAB";
            echo "<br />A = $numA";
            echo "<br />B = $numB";
            echo "<br /><br />Numero CD = $numCD";
            echo "<br />C = $numC";
            echo "<br />D = $numD<br />";

            echo "<br />Moltiplicazione tramite l'algoritmo di Karatsuba: " . ($numA * $numC * pow(10, 2) + ($numA * $numC + $numB * $numD - ($numA - $numB) * ($numC * $numD)) * 10 + $numB * $numD);
        ?>
    </body>
</html>