<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 13 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 13</h1>
        <p>Si scriva uno script che, dati cinque valori interi con i relativi pesi, visualizzi la loro media pesata o
ponderata. A differenza della media aritmetica, nella media pesata, ciascun numero ha una
determinata importanza (peso) che influisce sul calcolo; il valore di tale media è dato dalla somma
dei prodotti di ciascun numero per il rispettivo peso, fratto la somma dei pesi. Dati n valori
numerici:</p>
        <hr>
        <?php
            //Numeri interi e relativi pesi
            $num1 = random_int(1, 20);
            $peso1 = random_int(1, 5);
            
            $num2 = random_int(1, 20);
            $peso2 = random_int(1, 5);

            $num3 = random_int(1, 20);
            $peso3 = random_int(1, 5);
            
            $num4 = random_int(1, 20);
            $peso4 = random_int(1, 5);

            $num5 = random_int(1, 20);
            $peso5 = random_int(1, 5);


            echo "Numero 1: $num1, Peso: $peso1;<br />";
            echo "Numero 2: $num2, Peso: $peso2;<br />";
            echo "Numero 3: $num3, Peso: $peso3;<br />";
            echo "Numero 4: $num4, Peso: $peso4;<br />";
            echo "Numero 5: $num5, Peso: $peso5;<br />";

            $numeratore = ($num1 * $peso1) + ($num2 * $peso2) + ($num3 * $peso3) + ($num4 * $peso4) + ($num5 * $peso5);
            $denominatore = $peso1 + $peso2 + $peso3 + $peso4 + $peso5;

            echo "<br />Media pesata: " . $numeratore / $denominatore;
        ?>
    </body>
</html>