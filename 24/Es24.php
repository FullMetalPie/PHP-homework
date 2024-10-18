<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 24 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 24</h1>
        <p>Generare casualmente una sequenza di 1000 nucleotidi (rappresentati dalle lettere A, C, G e T) di
        un filamento di DNA.</p>
        <hr />
        <?php
        echo "<p>";
        for ($i = 0; $i < 1000; $i++) {
            $lettera = random_int(1, 4);
            $dna = match ($lettera) {
                1 => "A",
                2 => "C",
                3 => "G",
                4 => "T",
            };
            echo "$dna";
        }
        
        echo "</p>";
        ?>
    </body>
</html>