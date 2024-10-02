<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 8 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 8</h1>
        <p>Scrivere uno script che, dato un numero intero a 3 cifre, restituisca le 3 cifre separate su 3 righe
        differenti.</p>
        <hr>
        <?php
            $num = 420;
            $primaCifra = floor($num / 100);
            $secondaCifra = floor(($num - ($primaCifra) * 100) / 10);
            $terzaCifra = floor($num - (($primaCifra * 100) + ($secondaCifra * 10)));

            echo "Numero: $num<br />";
            echo "<br />Prima cifra: " . $primaCifra;
            echo "<br />Seconda cifra: " . $secondaCifra;
            echo "<br />Terza cifra: " . $terzaCifra;
        ?>
    </body>
</html>