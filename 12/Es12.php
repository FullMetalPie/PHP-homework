<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 12 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 12</h1>
        <p>Scrivere uno script che calcoli con sufficiente precisione il pi greco (π) sfruttando la formula di
Nilakantha, riportata di seguito; da notare come la serie di somme e sottrazioni può andare avanti
all’infinito. Dopo aver individuato come continuare la formula, ricavare π con almeno 4 cifre
decimali esatte.</p>
        <img src="img.png" width="400px">
        <p>Utilizzare il valore di π ottenuto per calcolare area e circonferenza di un cerchio dato il raggio</p>
        <hr>
        <?php
            $nilakantha = ((1 / (1 * 2 * 3)) - (1 / (2 * 3 * 5)) + (1 / (3 * 4 * 7)) - (1 / (4 * 5 * 9)) + (1 / (5 * 6 * 11)) - (1 / (6 * 7 * 13)) + (1 / (7 * 8 * 15))  - (1 / (8 * 9 * 17)) + (1 / (9 * 10 * 19)) - (1 / (10 * 11 * 21)) + (1 / (11 * 12 * 23)) - (1 / (12 * 13 * 25)) + (1 / (13 * 14 * 27)) - (1 / (14 * 15 * 29))) + 3;
        
            echo "Pi greco calcolato con la formula di Nilakantha: $nilakantha";
            
            $raggio = random_int(3,6);
            echo "<br />Raggio: $raggio<br />";
            echo "<br />Area: " . $nilakantha * pow($raggio, 2);
            echo "<br />Circonferenza: " . (2 * $nilakantha) * $raggio;
        ?>
    </body>
</html>