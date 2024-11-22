<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 50 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 50</h1>
        <p>Sia data una frase di senso compiuto lunga almeno 25 caratteri. Dopo aver controllato che sia
        priva di caratteri multibyte e aver eliminato eventuali segni di punteggiatura (, ; . : ! ?), riportare:<br />
        <ul>
            <li>la stringa ottenuta sostituendo la parola più lunga con smurf;</li>
            <li>la stringa ottenuta concatenando i primi 2 e gli ultimi 3 caratteri di ogni parola;</li>
            <li>la stringa ottenuta sostituendo tutte le vocali con la lettera a.</li>
        </ul>
        </p>
        <hr />
        <?php
        $str = "Finora, è stata una giornata interessante.";

        echo "<p><strong>Stringa da manipolare:</strong> " . $str . "<br />";

        $str = str_replace(",", "", $str);
        $str = str_replace(";", "", $str);
        $str = str_replace(".", "", $str);
        $str = str_replace(":", "", $str);
        $str = str_replace("!", "", $str);
        $str = str_replace("?", "", $str);

        $str = trim($str);
        $arr = explode(" ", $str);

        for ($i = 0; $i < count($arr); $i++) {
            if (strtolower($arr[$i]) > "z" || strtolower($arr[$i]) < "a") {
                unset($arr[$i]);
            }
        }

        echo "<strong>Stringa senza punteggiatura e caratteri multibyte:</strong> " .  implode(" ", $arr) . "<br />";
        echo "<ul>";

        //1. Sostituzione parola piu' lunga con "smurf"

        $arrTemp = $arr;

        $maxLen = 0; //lunghezza stringa
        $j = 0;

        foreach ($arrTemp as $c) {
            if (strlen($c) > $maxLen) {
                $j = $i;
            }
        }

        $arrTemp[$j] = "smurf";
        echo "<li>" . implode(" ", $arrTemp) . "</li>";

        //2. Concatenazione primi 2 e gli ultimi 3 caratteri di ogni parola

        $arrTemp = $arr;

        echo "<li><strong>Non sono riuscito a farlo</strong></li>";

        //3. Sostituzione vocali con 'a'

        $arrTemp = implode(" ", $arr);

        $arrTemp = str_replace("e", "a", $arrTemp);
        $arrTemp = str_replace("i", "a", $arrTemp);
        $arrTemp = str_replace("o", "a", $arrTemp);
        $arrTemp = str_replace("u", "a", $arrTemp);

        echo "<li>" . $arrTemp . "</li>";

        ?>
    </body>
</html>