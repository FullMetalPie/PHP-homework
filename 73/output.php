<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 61 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 61</h1>
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
            foreach ($_POST["esame"] as $esame) {
                if (empty($esame)) {
                    $_DATA["esame[]"] = "non inserito";
                } else if ($esame == 30 && $_POST["lode"]) {

                }
            }
        }

        echo "Età: " . $_DATA["age"] . "<br />";
        echo "Sesso: " . $_DATA["sex"] . "<br />";
        echo "Esame di stato: " . $_DATA["esameStato"] . " " . $_DATA["lodeStato"] . "<br />";
        echo "Esami:<br />";
        foreach ($_POST["esame"] as $esami) {
            echo $esami . "<br />";
        }
        ?>
    </body>
</html>
