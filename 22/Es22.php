<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 22 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 22</h1>
        <p>Scrivere un programma in grado di calcolare a<sup>b</sup>, con a e b interi, senza l’utilizzo della funzione
        pow() e dell’operatore **.</p>
        <hr />
        <?php
        $numA = random_int(2, 9);
        $numB = random_int(2, 9);

        echo "<p>Numero A (base): $numA;<br />Numero B (esponente): $numB.</p>";
        
        $result = $numA;
        for ($i = 1; $i < $numB; $i++) {
            $result *= $numA;
        }
        
        echo "<p>$numA<sup>$numB</sup> = $result</p>";
        ?>
    </body>
</html>