<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 25 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 25</h1>
        <p>. Scrivere uno script in grado di stabilire se un dato anno del calendario gregoriano (dal 1582) è
        bisestile. Sono bisestili:
        <ul>
            <li>gli anni non secolari il cui numero è divisibile per 4;</li>
            <li>gli anni secolari il cui numero è divisibile per 400.</li>
        </ul>
        </p>
        <hr />
        <?php
        $anno = random_int(1582, 2024);
        
        echo "<p>";
        if ($anno % 400 == 0) {
            echo "$anno è bisestile.";
        } else if ($anno % 4 == 0) {
            echo "$anno è bisestile.";
        } else {
            echo "$anno non è bisestile.";
        }
        echo "</p>";


        ?>
    </body>
</html>