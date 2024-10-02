<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 3 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 3</h1>
        <p>Si scriva uno script che, dato un numero in virgola mobile, visualizzi parte intera e parte frazionaria, separate.</p>
        <hr>
        <?php
            $num = M_PI;

            echo "Numero: $num <br />";
            echo "<br />Parte intera: " . floor($num);
            echo "<br />Parte decimale: " . $num - floor($num);
        ?>
    </body>
</html>