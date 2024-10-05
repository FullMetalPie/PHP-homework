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
            $num1 = 7;
            $num2 = 3;

            echo "Numero A: $num1;<br />Numero B: $num2.<br />";
            echo "<br />Quoziente: " . (int)($num1 / $num2);
            echo "<br />Resto: " . $num1 % $num2;
        ?>
    </body>
</html>