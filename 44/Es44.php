<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 44 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio x</h1>
        <p>Generare 10 numeri interi pseudo-casuali <span style="color:red">senza ripetizione</span> compresi fra 1 e 10</p>
        <hr />
        <?php
        $arr = [];
        $arrExclude = [];

        $arr[0] = random_int(1, 10);
        $arrExclude[0] = $arr[0];

        for ($i = 1; $i < 10; $i++) {
            $arr[$i] = random_int(1, 10);

            $j = 0;
            echo $i . " - " . $j;
            while ($arr[$i] != $arrExclude[$j]) {
                $j++;
                echo $j;
            }

            if ($j < count($arr)) {
                $i--;
            } else {
                $arrExclude[$j] = $arr[$i];
            }
        }

        print_r($arr);
        echo "<br />";
        print_r($arrExclude);
        ?>
    </body>
</html>