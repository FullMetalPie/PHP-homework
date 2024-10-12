<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 21 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 21</h1>
        <p>Dati tre interi stabilire se possono essere le lunghezze dei lati di un triangolo. In un triangolo, un
        lato è sempre minore della somma degli altri due.</p>
        <hr />
        <?php
        $lato1 = random_int(1, 10);
        $lato2 = random_int(1, 10);
        $lato3 = random_int(1, 10);

        echo "<p>Lato 1: $lato1;<br />Lato 2: $lato2;<br />Lato 3: $lato3.</p>";
        
        echo "<p>";

        if ($lato1 < ($lato2 + $lato3)) {
            echo "Lato 1 valido.<br />";
        } else {
            echo "Lato 1 non valido.<br />";
        }
        
        if ($lato2 < ($lato1 + $lato3)) {
            echo "Lato 2 valido.<br />";
        } else {
            echo "Lato 2 non valido.<br />";
        }

        if ($lato3 < ($lato2 + $lato2)) {
            echo "Lato 3 valido.<br />";
        } else {
            echo "Lato 3 non valido.<br />";
        }

        echo "</p>";
        ?>
    </body>
</html>