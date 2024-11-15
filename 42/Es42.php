<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 42 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 42</h1>
        <p>Data una stringa, trasformare le lettere minuscole in maiuscole e viceversa.
        </p>
        <hr />
        <?php
        $str = "Si sta come d'autunno sugli alberi le foglie";
        $arr = mb_str_split($str);

        echo "<p>Frase: <strong>" . $str . "</strong><br />";
        
        for ($i = 0; $i < mb_strlen($str); $i++) {
            if ($arr[$i] == mb_strtolower($arr[$i])) {
                $arr[$i] = mb_strtoupper($arr[$i]);
            } else {
                $arr[$i] = mb_strtolower($arr[$i]);
            }
        }

        $stringaFinale = implode("", $arr);
        echo "<br />Frase finale: " . $stringaFinale . "</p>"
        ?>
    </body>
</html>