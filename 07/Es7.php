<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 7 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 7</h1>
        <p>Effettuare la divisione fra due numeri interi, stampando separatamente quoziente e resto.</p>
        <hr>
        <?php
            $num1 = 16;
            $num2 = 9;

            echo "Numero A: $num1;<br />Numero B: $num2.<br />";
            echo "<br />Quoziente: " . number_format(($num1 / $num2), 2);
            echo "<br />Resto: " . $num1 % $num2;
        ?>
    </body>
</html>