<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 48 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 48</h1>
        <p>Generare in modo casuale una stringa contenente 30 caratteri alfanumerici. Scrivere uno script
            che permetta di ricavare il numero di occorrenze di coppie di caratteri costituite, nell’ordine,
            da una vocale e un valore numerico.<br />
            Esempio:<br />
            3ve8ryth1ng1sgo1i1ng2b34lright &rarr; 3
        </p>
        <hr />
        <?php
        $str = [];

        for ($i = 0; $i < 30; $i++) {
            $dec = random_int(48, 90);
            if ($dec >= 58 && $dec < 65) {
                $dec = random_int(65, 90);
            }
            $str[] = strtolower(chr($dec));
        }

        echo "<p>Stringa generata: " . implode($str) . "<br />";

        $count = 0;
        for ($i = 0; $i < count($str); $i++) {
            switch($str[$i]) {
                case "a":
                case "e":
                case "i":
                case "o":
                case "u":
                    if ($i <= 29) {
                        if ($str[$i + 1] > 0 && $str[$i + 1] < 9) {
                            $count++;
                        }
                    }
                    break;
            }
        }

        echo "Contatore vocale + numero = " . $count . "</p>";
        ?>
    </body>
</html>