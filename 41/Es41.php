<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 41 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 41</h1>
        <p>Data una stringa, determinare quante vocali e quante consonanti contiene (<span style="color:red">ignorare le lettere
        accentate</span>).</p>
        <hr />
        <?php
        $str = "Si sta come d'autunno sugli alberi le foglie";
        $arr = mb_str_split($str);

        $contatoreConsonanti = 0;
        $contatoreVocali = 0;

        echo "<p>Frase: <strong>" . $str . "<br /></strong>";

        for ($i = 0; $i < mb_strlen($str); $i++) {
            if (strtolower($arr[$i]) >= "a" && strtolower($arr[$i]) <= "z") {
                switch ($arr[$i]) {
                    case "a":
                    case "e":
                    case "i":
                    case "o":
                    case "u":
                        $contatoreVocali++;
                        break;
                    default:
                        $contatoreConsonanti++;
                        break;
                }
            }
        }
        
        echo "<br />Vocali: " . $contatoreVocali . ";<br />Consonanti: " . $contatoreConsonanti . "</p>"
        ?>
    </body>
</html>