<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 17 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 17</h1>
        <p>L’università di Sheffield ha studiato alcune formule matematiche da utilizzare per addobbare un
            albero di Natale in maniera perfetta:
            <ol>
                <li>Numero di palline: <b>(sqrt(17) / 20) * Altezza albero</b></li>
                <li>Lunghezza dei festoni (cm): <b>(13 * 𝞹) / 8</b></li>
                <li>Lunghezza delle luci (cm): <b>𝞹 * Altezza albero</b></li>
                <li>Altezza del puntale: <b>Altezza albero / 10</b></li>
            </ol>
        </p>
        <hr>
        <?php
            $altezza = random_int(120, 200);
            echo "Altezza albero: $altezza cm<br />";

            echo "<br />Numero di palline: " . floor((sqrt(17) / 20) * $altezza);
            echo "<br />Lunghezza dei festoni: " . number_format(((13 * M_PI) / 8) * $altezza, 2) . " cm";
            echo "<br />Lunghezza delle luci: " . number_format(M_PI * $altezza, 2) . " cm";
            echo "<br />Altezza del puntale: " . $altezza / 10 . " cm";
        ?>
    </body>
</html>