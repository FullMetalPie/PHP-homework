<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 64 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        
    </head>
    <body>
        <h1>Esercizio 64</h1>
        <h2 style="font-style: oblique; color: blue">Ricezione dati</h2>
        <p>
            Scrivere un’applicazione PHP che permetta di simulare l’ordinazione di una pizza componibile,
            ovvero i cui ingredienti da aggiungere sono scelti dall’utente in una lista fino a un massimo di 12.<br />Il
            numero di ingredienti scelti determina la dimensione e il prezzo della pizza:<br />
            <ul>
                <li><strong>Normale</strong>:&ensp; 0-4;</li>
                <li><strong>Gigante</strong>:&emsp;5-8;</li>
                <li><strong>Al metro</strong>:&ensp;9-12;</li>
            </ul>
        </p>
        <hr />
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $count = 0;
                foreach ($_POST["ingredienti"] as $ingredienti) {
                    if ($ingredienti) {
                        $count++;
                    }
                }

                $dimensionePizza = match (true) {
                    $count >= 0 && $count <= 4 => "Normale",
                    $count >= 5 && $count <= 8 => "Gigante",
                    default => "Al metro"
                };

                $_DATA["Dimensione pizza"] = $dimensionePizza;
            }

            echo "Hai scelto " . $count . " ingredienti.<br />";
            echo "Dimensione pizza: " . $_DATA["Dimensione pizza"];
        ?>
    </body>
</html>
