<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 73 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        <style>
            table {
                border-collapse: collapse;
                
            }
            td, tr, th {
                border: 1px solid black; 
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 73</h1>
        <h2 style="font-style: oblique; color: blue">Ricezione dati</h2>
        <p>Una società di statistica intende realizzare un’applicazione Web per la raccolta di alcuni dati
            personali di studenti universitari emiliani del primo anno. Sono richiesti:
            <ul>
                <li>l'età;</li>
                <li>il sesso;</li>
                <li>l'università emiliana di appartenenza:</li>
                    <ul>
                        <li>Bologna;</li>
                        <li>Parma;</li>
                        <li>Modena - Reggio Emilia;</li>
                        <li>Ferrara;</li>
                    </ul>
                <li>il voto ottenuto all’esame di Stato (da 60 a 100; considerare anche l’eventuale lode);</li>
                <li>i voti degli ultimi 5 esami sostenuti (18 ÷ 30, con eventuale lode), con i relativi crediti (1 ÷ 10);</li>
                <li>autorizzazione esplicita al trattamento dei dati personali.</li>
            </ul>
            Visualizzare nel modo che si ritiene più consono i dati acquisiti e validati.
        </p>
        <hr />
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            //Età
            if (empty($_POST["age"])) {
                $_DATA["age"] = "Non inserito";
            } else {
                $_DATA["age"] = $_POST["age"];
            }
            //Sesso
            if (empty($_POST["sex"])) {
                $_DATA["sex"] = "Non inserito";
            } else {
                $_DATA["sex"] = $_POST["sex"];
            }
            //Esame di stato
            if (empty($_POST["esameStato"])) {
                $_DATA["esameStato"] = "Non inserito";
            }else {
                if ($_POST["esameStato"] == 100 && $_POST["lodeStato"]) {
                    $_DATA["esameStato"] = $_POST["esameStato"];
                    $_DATA["lodeStato"] = $_POST["lodeStato"];
                } else {
                    $_DATA["esameStato"] = $_POST["esameStato"];
                    $_DATA["lodeStato"] = "senza lode";
                }
            }
            //Ultimi 5 esami
            $i = 0;
            foreach ($_POST["esame"] as $esame) {
                if (empty($esame)) {
                    $_DATA["esame"][$i] = "non inserito";
                }else {
                    $_DATA["esame"][$i] = $esame;
                } 
                
                if ($esame == 30 && $_POST["lode"]) {
                    $_DATA["lode"][$i] = "con lode";
                } else {
                    $_DATA["lode"][$i] = "senza lode";
                }
                $i++;
            }

            $i = 0;
            foreach ($_POST["crediti"] as $crediti) {
                if (empty($crediti)) {
                    $_DATA["crediti"][$i] = "non inseriti";
                } else {
                    $_DATA["crediti"][$i] = $crediti;
                }
                $i++;
            }
            //Università di appartenenza
            if (empty($_POST["esameStato"])) {
                $_DATA["university"] = "non inserito";
            } else {
                $_DATA["university"] = $_POST["university"];
            }
            //Trattamento dati personali
            if (!$_POST["personal_data"]) {
                $_DATA["personal_data"] = "no";
            } else {
                $_DATA["personal_data"] = $_POST["personal_data"];
            }
        }

        //da fare: inserire i dati in una tabella
        ?>
        <table>
            <thead>
                <tr>
                    <th colspan="2">Dati personali</th>
                </tr>
            </thead>
            <?php
            foreach ($_DATA as $key => $value) {
                if ($key == "esame") {
                    echo "<tr><th>Ultimi 5 esami</th><td><ul>";
                    for ($i = 0; $i < 5; $i++) {
                        echo "<li>" . $_DATA["esame"][$i] . ", crediti: " . $_DATA["crediti"][$i] . ", " . $_DATA["lode"][$i] . "</li>";
                    }
                    echo "</ul></td></tr>";
                } elseif ($key == "lode" || $key == "crediti") {
                }else {
                    echo "<tr><th>" . $key . "</th><td>" . $value . "</td>";
                }
            }
            ?>
        </table>
    </body>
</html>
