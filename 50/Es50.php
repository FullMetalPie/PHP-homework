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

        $str = str_replace(",", " ", $str);
        $str = str_replace(";", " ", $str);
        $str = str_replace(".", " ", $str);
        $str = str_replace(":", " ", $str);
        $str = str_replace("!", " ", $str);
        $str = str_replace("?", " ", $str);

        $arr = explode(" ", $str);

        for ($i = 0; $i < count($arr); $i++) {
            if (strtolower($arr[$i]) > "z" || strtolower($arr[$i]) < "a") {
                $arr[$i] = " ";
            }
        }

        echo "<strong>Stringa senza punteggiatura e caratteri multibyte:</strong> " .  implode(" ", $arr) . "<br />";

        
        ?>
    </body>
</html>