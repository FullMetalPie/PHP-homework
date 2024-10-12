<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 23 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 23</h1>
        <p>Realizzare uno script PHP che calcoli il fattoriale di un numero.</p>
        <hr />
        <?php
        $num = random_int(2, 10);

        echo "<p>$num! = </p>" . fattoriale($num);

        function fattoriale($num) {
            //continuare
            return fattoriale($num);
        }
        ?>
    </body>
</html>