<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 66 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        
    </head>
    <body>
        <h1>Esercizio 66</h1>
        <h2 style="font-style: oblique; color: blue">Ricezione dati</h2>
        <p>
            Scrivere un’applicazione che permetta di calcolare la media geometrica fra 5 valori positivi; la media
            geometrica di n termini è la radice n-esima del prodotto degli n valori.
        </p>
        <hr />
        <?php
        $valido = true;
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $i = 0;
            foreach ($_POST["valori"] as $valori) {
                if ($valori <= 0 || empty($valori)) {
                    $_DATA["Valori"][$i] = "Valore non valido.";
                    $valido = false;
                } else {
                    $_DATA["Valori"][$i] = $valori;
                }
                $i++;
            }
            
            if ($valido) {
                $prodotto = 1;
                
                foreach ($_DATA["Valori"] as $valori) {
                    $prodotto *= $valori;
                }

                $_DATA["Media geometrica"] = pow($prodotto, (1 / 5));

                echo "<strong>Valori inseriti</strong>:<br /><ul>";
                foreach ($_DATA["Valori"] as $valori) {
                    echo "<li>" . $valori . "</li>";
                }

                echo "</ul><br /><strong>Media geometrica:</strong> " . $_DATA["Media geometrica"];

            } else {
                echo "Uno dei valori non e' valido.";
            }

            
        }
        ?>
    </body>
</html>
