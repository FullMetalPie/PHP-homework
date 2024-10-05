<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 19 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 19</h1>
        <p>. Calcolare il punteggio ottenuto da un atleta in una gara di tuffi dal trampolino, implementando il
        seguente algoritmo: 
        <ol>
            <li>Dieci giudici assegnano un voto compreso fra 2 e 10 (generato casualmente);</li>
            <li>Vengono quindi sommati tutti i voti ad eccezione del più alto e del più basso.</li>
            <li>Tale somma viene moltiplicata per un coefficiente di difficoltà, un numero reale compreso fra 1 e 5</li>
        </ol>
        </p>
        <hr>
        <?php
            $voto1 = random_int(2, 10);
            $voto2 = random_int(2, 10);
            $voto3 = random_int(2, 10);
            $voto4 = random_int(2, 10);
            $voto5 = random_int(2, 10);
            $voto6 = random_int(2, 10);
            $voto7 = random_int(2, 10);
            $voto8 = random_int(2, 10);
            $voto9 = random_int(2, 10);
            $voto10 = random_int(2, 10);

            $max = max($voto1, $voto2, $voto3, $voto4, $voto5, $voto6, $voto7, $voto8, $voto9, $voto10);
            $min = min($voto1, $voto2, $voto3, $voto4, $voto5, $voto6, $voto7, $voto8, $voto9, $voto10);
            $coeff = random_int(1, 5);

            $sommaVoti = ($voto1 + $voto2 + $voto3 + $voto4 + $voto5 + $voto6 + $voto7 + $voto8 + $voto9 + $voto10) - $max - $min;
            echo "Somma dei voti dei giudici: $sommaVoti";
            echo "<br />Punteggio finale: $sommaVoti * $coeff: " . $sommaVoti * $coeff;
        
        ?>
    </body>
</html>