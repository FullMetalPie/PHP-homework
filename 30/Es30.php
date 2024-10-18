<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 30 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 30</h1>
        <p>I numeri narcisistisono quelli in cui la somma delle loro 3 cifre, ciascuna elevata alla terza potenza,
            dà lo stesso numero iniziale. Scrivere uno script PHP che verifichi se un dato numero (a tre cifre) è
            narcisistico.<br />
            Esempi:
            <ol>
                <li><strong>153</strong> &rarr; 13 + 53 + 33 = <strong>153</strong></li>
                <li><strong>370</strong> &rarr; 33 + 73 + 03 = <strong>370</strong></li>
            </ol>
        </p>
        <hr />
        <?php
        $num = random_int(100, 999);
        $temp = $num;
        $somma = 0;
        echo "<p>$num &rarr; ";
        for ($i = 0; $i < floor(log10($num)) +1 ; $i++) {
            $somma += pow($num % 10, 3);
            $num = floor($num / 10);
        }
        $somma += pow($num % 10, 3);
        echo " $somma";

        if ($num != $somma) {
            echo "<br />$temp non è un numero narcisista.</p>";
        } else {
            echo "<br />$temp è un numero narcisista.</p>";
        }


        ?>
    </body>
</html>