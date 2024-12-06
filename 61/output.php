<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 61 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 61</h1>
        <h2 style="font-style: oblique; color: blue">Ricezione dati</h2>
        <p>Scrivere un’applicazione PHP per verificare se un indirizzo IPv4 sia valido o meno; individuarne,
        inoltre, la classe di appartenenza.</p>
        <hr />
        <?php
        $valido = true;
        
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if ($_POST["primo"] === "") {
                $_DATA["primo"] = "Null";
                $valido = false;
            } else {
                $_DATA["primo"] = $_POST["primo"];
            }

            if ($_POST["secondo"] === "") {
                $_DATA["secondo"] = "Null";
                $valido = false;
            } else {
                $_DATA["secondo"] = $_POST["secondo"];
            }

            if ($_POST["terzo"] === "") {
                $_DATA["terzo"] = "Null";
                $valido = false;
            } else {
                $_DATA["terzo"] = $_POST["terzo"];
            }

            if ($_POST["quarto"] === "") {
                $_DATA["quarto"] = "Null";
                $valido = false;
            } else {
                $_DATA["quarto"] = $_POST["quarto"];
            }
        }
        // Scrittura dati

        $ip = $_DATA["primo"] . "." . $_DATA["secondo"] . "." . $_DATA["terzo"] . "." . $_DATA["quarto"];
        echo "<p><strong>Ip inserito: </strong>";

        if (!$valido) {
            echo "Indirizzo IP non valido!";
        } else {
            echo "Indirizzo IP valido";
        }

        echo "<br />[<strong>" . $_DATA["primo"] . "</strong>]";
        echo "[<strong>" . $_DATA["secondo"] . "</strong>]";
        echo "[<strong>" . $_DATA["terzo"] . "</strong>]";
        echo "[<strong>" . $_DATA["quarto"] . "</strong>]";

        // Classe indirizzo
        echo "<br />L'indirizzo inserito è di ";

        $class = match(true) {
            $_DATA["primo"] >= 1 && $_DATA["primo"] < 127 => "Classe A.",
            $_DATA["primo"] >= 128 && $_DATA["primo"] < 191 => "Classe B.",
            $_DATA["primo"] >= 192 && $_DATA["primo"] < 223 => "Classe C.",
            $_DATA["primo"] >= 224 && $_DATA["primo"] < 239 => "Classe D.",
            $_DATA["primo"] >= 240 => "Classe E."
        };

        echo $class . "</p>";
        ?>
    </body>
</html>
