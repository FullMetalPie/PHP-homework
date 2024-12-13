<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 65 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        <style>
            table {
                border-collapse: collapse;
            }
            tr, td, th {
                border: 1px solid black;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 65</h1>
        <h2 style="font-style: oblique; color: blue">Ricezione dati</h2>
        <p>
            Un lipogramma è costituito da un testo in cui non può essere usata una determinata lettera.<br /> Scrivere
            un’applicazione che permetta di verificare se una data stringa è un lipogramma.
        </p>
        <hr />
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if (empty($_POST["lettera"]) || (strtolower($_POST["lettera"]) < "a" || strtolower($_POST["lettera"]) > "z")) {
                    $_DATA["Lettera"] = "Non inserita / Non valida";
                } else {
                    $_DATA["Lettera"] = $_POST["lettera"];
                }

                if (empty($_POST["testo"])) {
                    $_DATA["Testo"] = "Non inserito";
                } else {
                    $_DATA["Testo"] = $_POST["testo"];
                }

                if (str_contains(strtolower($_DATA["Testo"]), strtolower($_DATA["Lettera"]))) {
                    $_DATA["Lipogramma?"] = "Si";
                } else {
                    $_DATA["Lipogramma?"] = "No";
                }
            }
        ?>
        <table>
            <tr>
                <th colspan="2">Lipogramma</th>
            </tr>
            <?php
                foreach ($_DATA as $key => $value) {
                    echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
                }
            ?>
        </table>
    </body>
</html>
