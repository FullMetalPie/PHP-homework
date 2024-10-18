<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 27 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 27</h1>
        <p>Fornita una data in formato numerico, comprendendo anche il giorno della settimana,
        determinare quella successiva, senza considerare l’anno. Es.:</p>
        <hr />
        <?php
        $mese = random_int(1, 12);
        $mese31G = false;
        $mese28G = false;
        switch ($mese) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                $mese31G = true;
                $giorno = random_int(1,31);
                break;
            case 2:
                $mese28G = true;
                $giorno = random_int(1, 28);
                break;
            default:
                $giorno = random_int(1, 30);
        }

        echo "<p>Data: $giorno/$mese<br />";

        if ($mese31G = true && $giorno == 31) {
            if ($mese == 12) {
                $mese = 1;
                $giorno = 1;
            } else {
                $mese++;
                $giorno = 1;
            }
        } else if ($giorno != 31) {
            $giorno++;
        } else if ($mese31G == true && $giorno != 31) {
            $giorno++;
        } else if ($mese28G == true && $giorno == 28) {
            $mese++;
            $giorno = 1;
        } else {
            if ($giorno == 30) {
                $mese++;
                $giorno = 1;
            } else {
                $giorno++;
            }
        }

        echo "Data successiva: $giorno/$mese</p>";
        ?>
    </body>
</html>