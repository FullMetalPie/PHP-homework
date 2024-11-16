<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 45 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 45</h1>
        <p>Un numero naturale viene definito ondulante se è costituito esattamente da due sole cifre
alternate, come, ad esempio, 353 o 585858.<br /> Scrivere uno script che determini se un dato
numero naturale (con almeno 5 cifre) è ondulante.</p>
        <hr />
        <?php
        $num = 56565;
        
        if (strlen("$num") % 2) {
            $num .= "$num"[1];
        }

        $arr = mb_str_split($num, 2);

        echo "<p>Numero: " . $num . "<br />";

        if (max($arr) == min($arr)) {
            echo "Numero ondulante.";
        } else {
            echo "Numero non ondulante.";
        }
        ?>
    </body>
</html>