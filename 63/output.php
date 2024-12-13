<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 63 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        <style>
            table {
                border-collapse: collapse;
            }
            tr, th, td {
                border: 1px solid black;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 63</h1>
        <h2 style="font-style: oblique; color: blue">Ricezione dati</h2>
        <p>
            Realizzare una semplice applicazione PHP per l’acquisizione di dati personali. Mediante un form
            HTML, sono richiesti all’utente nome, cognome e indirizzo e-mail; quest’ultimo, affinché si sia certi
            della sua correttezza, dovrà essere richiesto due volte in due distinti campi. Validare sul lato server
            l’e-mail dell’utente confrontando quindi i due indirizzi acquisiti, ignorando però gli eventuali punti
            presenti prima della chiocciola (ad esempio, il controllo è positivo per “ing.mario.rossi@gmail.com”
            e “ingmariorossi@gmail.com”). Memorizzare i dati acquisiti in un’apposita e unica struttura dati;
            generare quindi in modo dinamico una tabella HTML riportante quanto acquisito.
        </p>
        <hr />
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (empty($_POST["nome"])) {
                $_DATA["Nome"] = "Non inserito.";
            } else {
                $_DATA["Nome"] = $_POST["nome"];
            }

            if (empty($_POST["cognome"])) {
                $_DATA["Cognome"] = "Non inserito.";
            } else {
                $_DATA["Cognome"] = $_POST["cognome"];
            }

            if (!str_contains($_POST["email"], "@") && !str_contains($_POST["email2"], "@")) {
                $_DATA["Indirizzo mail"] = "Non valida";
            } else {
                $str1 = explode("@",  $_POST["email"]);
                $str2 = explode("@",  $_POST["email2"]);
                
                if (str_contains($str1[0], ".") || str_contains($str2[0], ".")) {
                    $str1[0] = implode(explode(".", $str1[0]));
                    $str2[0] = implode(explode(".", $str2[0]));

                    if ($str1[0] == $str2[0]) {
                        $_DATA["Indirizzo mail"] = $_POST["email"];
                    } else {
                        $_DATA["Indirizzo mail"] = "Non valido.";
                    }
                } else if ($str1[1] == $str2[1]) {
                    $_DATA["Indirizzo mail"] = $_POST["email"];
                } else {
                    $_DATA["Indirizzo mail"] = "Non valido.";
                }
            }
        }
        ?>
        <table>
            <tr>
                <th colspan="2">Dati personali</th>
            </tr>
            <?php
            foreach ($_DATA as $key => $value) {
                echo "<tr><th>" . $key . "</th><td>" . $value . "</td></tr>";
            }
            ?>
        </table>
    </body>
</html>
