<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 43 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 43</h1>
        <p>Sia data una stringa contenente un numero in virgola mobile; scrivere uno script PHP che
        permetta di ricavarne il numero di cifre.<br />
        Esempio:<br />-72.319 &rarr; 5 <strong>cifre</strong>
        </p>
        <hr />
        <?php
        $num = -73.319;

        $counter = 0;
        $str = mb_str_split($num);

        echo "<p>Numero: <strong>" . $num . "</strong><br />";

        foreach ($str as $c) {
            if ($c >= "0" && $c <= "9") {
                $counter++;
            }
        }
        
        echo "<br />Numero di cifre: " . $counter . "</p>";
        ?>
    </body>
</html>