<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 18 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 18</h1>
        <p>Generare casualmente un voto compreso fra 1 e 10 (includere i “mezzi voti”).</p>
        <hr>
        <?php
            $voto = (random_int(1, 10) * (1 / 2));

            echo "Valutazione: $voto";
        ?>
    </body>
</html>