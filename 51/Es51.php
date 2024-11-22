<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 51 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        <style>
            table {
                border-collapse: collapse;
            }
            td {
                border: 1px solid black;
                padding: 0.5em;
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 51</h1>
        <p>Sia data una stringa lunga esattamente 25 caratteri; dopo aver memorizzato ogni singolo
            carattere in un’unica e appropriata struttura dati, generare in modo dinamico a partire da essa
            una tabella HTML 5 x 5, come illustrato di seguito:
            <table id="table">
                <tr>
                    <td class="cells">.</td>
                    <td class="cells" style="color: red">E</td>
                    <td class="cells" style="color: red">T</td>
                    <td class="cells" style="color: red">N</td>
                    <td class="cells" style="color: red">E</td>
                </tr>
                <tr>
                    <td class="cells" style="color: red">M</td>
                    <td class="cells"> </td>
                    <td class="cells">A</td>
                    <td class="cells">L</td>
                    <td class="cells"> </td>
                </tr>
                <tr>
                    <td class="cells">E</td>
                    <td class="cells">D</td>
                    <td class="cells">I</td>
                    <td class="cells">C</td>
                    <td class="cells">C</td>
                </tr>
                <tr>
                    <td class="cells">U</td>
                    <td class="cells"> </td>
                    <td class="cells">A</td>
                    <td class="cells">R</td>
                    <td class="cells">U</td>
                </tr>
                <tr>
                    <td class="cells">A</td>
                    <td class="cells">P</td>
                    <td class="cells"> </td>
                    <td class="cells">A</td>
                    <td class="cells">L</td>
                </tr>
            </table>
        </p>
        <hr />
        <?php
        $str = "Ieri sono andato al mare!";
        $arr = str_split(strrev($str));

        echo "<p><strong>Stringa da 25 caratteri:</strong> " . $str .  "<br />";
        
        echo "<table>";
        
        $index = 0;
        for ($rows = 0; $rows < 5; $rows++) {
            echo "<tr>";
            for ($col = 0; $col < 5; $col++) {
                echo "<td>" . strtoupper($arr[$index]) . "</td>";

                $index++;
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>