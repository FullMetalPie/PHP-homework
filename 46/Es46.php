<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 46 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 46</h1>
        <p>Un numero autobiografico è un numero naturale di 10 cifre in cui ciascuna cifra alla posizione
n indica quante occorrenze della cifra n sono presenti.<br /> Ad esempio, 6210001000 è
autobiografico poiché:
        <ul>
            <li>Contiene 6 in posizione 0, indicando che vi sono sei 0 nel numero;</li>
            <li>Contiene 2 in posizione 1, indicando che vi sono due 1 nel numero;</li>
            <li>Contiene 1 in posizione 2, indicando che c'è un solo 2 nel numero;            </li>
            <li>...</li>
        </ul>
        Scrivere uno script che verifichi se un dato numero è autobiografico.
        </p>
        <hr />
        <?php
        $num = random_int(1000000000, 9999999999);
        $arr = mb_str_split($num);

        echo "<p>Numero: " . $num . "<br />";

        for ($i = 0; $i < count($arr); $i++) {
            if () {
                
            }
        }

        ?>
    </body>
</html>