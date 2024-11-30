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
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if ($_POST["primo"] === "") {
                $_DATA["primo"] = "<span>Nessun dato inserito</span>";
            } else {
                $_DATA["primo"] = $_POST["primo"];
            }

            if ($_POST["secondo"] === "") {
                $_DATA["secondo"] = "<span>Nessun dato inserito</span>";
            } else {
                $_DATA["secondo"] = $_POST["secondo"];
            }

            if ($_POST["terzo"] === "") {
                $_DATA["terzo"] = "<span>Nessun dato inserito</span>";
            } else {
                $_DATA["terzo"] = $_POST["terzo"];
            }

            if ($_POST["quarto"] === "") {
                $_DATA["quarto"] = "<span>Nessun dato inserito</span>";
            } else {
                $_DATA["quarto"] = $_POST["quarto"];
            }
        }
        
        $ip = $_DATA["primo"] . "." . $_DATA["secondo"] . "." . $_DATA["terzo"] . "." . $_DATA["quarto"];
        echo "<p><strong>Ip inserito: </strong>" . $ip . "</p>";
        ?>
    </body>
</html>