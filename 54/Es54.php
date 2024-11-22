<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 54 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 54</h1>
        <p>Tradurre in italiano la data e l’ora restituite in una stringa dalla funzione:
            <strong>date("l j F Y h:i:s A")</strong>
        </p>
        <hr />
        <?php
        $str = date("l j F Y h:i:s A");
        echo "<p>" . $str . "<br />";

        $arr = explode(" ",$str);

        //Giorno

        switch ($arr[0]) {
            case "Monday":
                $arr[0] = "Lunedì";
                break;
            case "Tuesday":
                $arr[0] = "Martedì";
                break;
            case "Wednesday":
                $arr[0] = "Mercoledì";
                break;
            case "Thursday":
                $arr[0] = "Giovedì";
                break;
            case "Friday":
                $arr[0] = "Venerdì";
                break;
            case "Saturday":
                $arr[0] = "Sabato";
                break;
            case "Sunday":
                $arr[0] = "Domenica";
                break;
        }

        //Mese

        switch ($arr[2]) {
            case "January":
                $arr[2] = "Gennaio";
                break;
            case "February":
                $arr[2] = "Febbraio";
                break;
            case "March":
                $arr[2] = "Marzo";
                break;
            case "April":
                $arr[2] = "Aprile";
                break;
            case "May":
                $arr[2] = "Maggio";
                break;
            case "June":
                $arr[2] = "Giugno";
                break;
            case "July":
                $arr[2] = "Luglio";
                break;
            case "August":
                $arr[2] = "Agosto";
                break;
            case "September":
                $arr[2] = "Settembre";
                break;
            case "October":
                $arr[2] = "Ottobre";
                break;
            case "November":
                $arr[2] = "Novembre";
                break;
            case "December":
                $arr[2] = "Dicembre";
                break;
        }

        //Ora

        $arrOra = explode(":", $arr[4]);
        
        if ($arr[5] == "PM") {
            $arrOra[0] += 12;
        }
        
        unset($arr[5]);
        $arr[4] = implode(":", $arrOra);

        $arr = implode(" ",$arr);

        echo "<br />" . $arr . "</p>";
        ?>
    </body>
</html>