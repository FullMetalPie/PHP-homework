<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 26 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 26</h1>
        <p>Scrivere uno script PHP che generi casualmente una data (per es., 1° marzo 2024) compresa fra il
        2001 e il 2099. Si tenga presente che:
        <ul>
            <li>i mesi di 31 giorni sono: gennaio, marzo, maggio, luglio, agosto, ottobre e dicembre;</li>
            <li>febbraio ha 29 giorni negli anni bisestili;</li>
            <li>&<span>deg;</span> è l’entità HTML per il carattere °.</li>
        </ul>
        </p>
        <hr />
        <?php
        $anno = random_int(2001, 2099);
        $bisestile = false;

        //Controllo se è bisestile
        if ($anno % 400 == 0) {
           $bisestile = true;
        } else if ($anno % 4 == 0) {
            $bisestile = true;
        } else {
            $bisestile = false;
        }

        $mese = random_int(1, 12);
        switch ($mese) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                $giorno = random_int(1,31);
                break;
            case 2:
                if ($bisestile == true) {
                    $giorno = random_int(1, 29);
                } else {
                    $giorno = random_int(1, 28);
                }
                break;
            default:
                $giorno = random_int(1, 30);
        }
        
        $mese = match ($mese) {
            1 => "Gennaio",
            2 => "Febbraio",
            3 => "Marzo",
            4 => "Aprile",
            5 => "Maggio",
            6 => "Giugno",
            7 => "Luglio",
            8 => "Agosto",
            9 => "Settembre",
            10 => "Ottobre",
            11 => "Novembre",
            12 => "Dicembre",
        };

        echo "<p>$giorno&deg; $mese $anno</p>";
        ?>
    </body>
</html>