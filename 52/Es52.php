<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 52 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 52</h1>
        <p>Un semplice CRC (Cyclic Redundancy Check) di una sequenza di caratteri è calcolato sommando
            in modulo 256 una alla volta i valori in ASCII di tutti i caratteri della stringa (eseguendo, cioè, la
            somma e ricavando il resto della divisione per 256 di tale valore); scrivere un’applicazione PHP
            che calcoli il CRC di una stringa di caratteri.<br />
            Esempio:<br />
            Stringa: "<strong>ABC</strong>".<br />
            Valori ASCII:<br />
            "A" &rarr; <span style="color: purple">65</span><br />
            "B" &rarr; <span style="color: red">66</span><br />
            "C" &rarr; <span style="color: green">67</span><br /><br />
            (<span style="color: purple">65</span> + <span style="color: red">66</span>) % 256 = <span style="color: blue">131</span><br />
            (<span style="color: blue">131</span>+ <span style="color: green">67</span>) % 256 = <strong>198</strong> &rarr; <strong>CRC</strong>
        </p>
        <hr />
        <?php
        $str = "ABC";
        $arr = str_split($str);

        echo "<p>Stringa: " . $str . "<br />";

        $somma = ord($arr[0]) + ord($arr[1]);
        $crc = $somma % 256;

        for ($i = 2; $i < count($arr); $i++) {
            $somma += ord($arr[$i]);
            $crc = $somma % 256;
        }

        echo "CRC:<strong> " . $crc . "</strong></p>";
        ?>
    </body>
</html>