<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 47 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 47</h1>
        <p>Dato un array eterogeneo di 10 elementi, scrivere uno script per stabilire il tipo di ciascuno di
        essi (boolean, integer, float o string).</p>
        <hr />
        <?php
        $arr = ["ciao", 1, 78, true, -90, 10.78, false, "normale", 1.90];

        echo "<p>";

        for ($i = 0; $i < count($arr); $i++) {
            $str = match (true) {
                $arr[$i] === (bool) $arr[$i] => "Boolean",
                $arr[$i] === (int) $arr[$i] => "Integer",
                $arr[$i] === (float) $arr[$i] => "Float",
                default => "String"
            };

            echo "[" . $arr[$i] . "] = " . $str . "<br />"; 
        }
        ?>
    </body>
</html>