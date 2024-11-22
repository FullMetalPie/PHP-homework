<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 49 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 49</h1>
        <p>Hexspeak è una forma di scrittura ideata da alcuni programmatori. La sua particolarità è quella
        di utilizzare le sole 16 cifre del sistema numerico esadecimale (da 0 a F).<br />
        <ul>
            <li>La cifra 0 viene usata al posto della lettera <strong>O</strong>;</li>
            <li>La cifra 1 al posto della <strong>I</strong>;</li>
            <li>La cifra 2 al posto della <strong>Z</strong>;</li>
            <li>La cifra 3 al posto della <strong>E</strong>;</li>
            <li>La cifra 5 al posto della <strong>S</strong>;</li>
            <li>La cifra 7 al posto della <strong>T</strong></li>
        </ul>
        Esempi:<br />
        <ul>
            <li><strong>Office</strong>: &rarr; 0x0FF1C3</li>
            <li><strong>Disease</strong>: &rarr; 0xD153A53</li>
            <li><strong>Code</strong>:  &rarr; 0xC0D3</li>
        </ul>
        Scrivere uno script che, una volta stabilito se una data parola è rappresentabile in Hexspeak, ne
        fornisca tale rappresentazione.
        </p>
        <hr />
        <?php
        $str = "Disease";
        $arr = mb_str_split(strtolower($str));

        echo "<p>Stringa da convertire: " . $str . "<br />";

        if (str_contains(strtolower($str), "o") ||
            str_contains(strtolower($str), "i") ||
            str_contains(strtolower($str), "z") ||
            str_contains(strtolower($str), "e") ||
            str_contains(strtolower($str), "s") ||
            str_contains(strtolower($str), "t")) {
            for ($i = 0; $i < count($arr); $i++) {
                $nuovoValore = match ($str[$i]) {
                    "o" => 0,
                    "i" => 1,
                    "z" => 2,
                    "e" => 3, 
                    "s" => 5, 
                    "t" => 7,
                    default => $str[$i]
                };
                $arr[$i] = $nuovoValore;
            }

            echo "0x" . strtoupper(implode($arr)) . "</p>";
        } else {
            echo "La stringa non è rappresentabile in Hexspeak.</p>";
        }
        ?>
    </body>
</html>