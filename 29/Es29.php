<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 29 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 29</h1>
        <p>Sia dato un numero naturale non terminante per zero; scrivere un programma che ne inverta la
        posizione delle cifre. Es.:<br />
        12345 &rarr; 54321
        </p>
        <hr />
        <?php
        $num = random_int(1, 1000);
        if ($num % 10 == 0) {
            $num += 1;
        }

        echo "<p>Numero: $num<br />";

        $numReverse = "";

        for ($i = 0; $i <= floor(log10($num)); $i++) {
            $numReverse .= $num % 10;
            $num = floor($num / 10);
        }
        $numReverse .= $num;

        echo "Numero inverso: $numReverse</p>";
        ?>
    </body>
</html>