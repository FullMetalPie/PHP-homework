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
            $phi = 100.144;

            echo "Numero: $phi <br />";
            echo "<br />Parte intera: " . floor($phi);
            echo "<br />Parte decimale: " . $phi - floor($phi);
        ?>
    </body>
</html>