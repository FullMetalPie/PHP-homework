<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 53 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        <style>
            table {
                border-collapse: collapse;
            }
            th, tr, td {
                border: 1px solid black;
                text-align: center;
                padding: 0.25em;
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 53</h1>
        <p>Codice fiscale. Sia dato un codice fiscale; ricavare da esso la data di nascita della persona. Nella
            generazione del codice fiscale:
            <ul>
                <li>
                    Anno di nascita (due cifre, settimo e ottavo carattere del codice):<br />si prendono le ultime
                    due cifre dell’anno di nascita; a parità degli altri dati, i nati a distanza di un secolo hanno
                    lo stesso codice.
                </li>
                <li>
                    Mese di nascita (una lettera, nono carattere):<br /> a ogni mese dell’anno viene associata una
                    lettera in base a questa tabella:
                    <table>
                        <tr>
                            <th>Lettera</th>
                            <th>Mese</th>
                            <th>Lettera</th>
                            <th>Mese</th>
                            <th>Lettera</th>
                            <th>Mese</th>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>Gennaio</td>
                            <td>E</td>
                            <td>Maggio</td>
                            <td>P</td>
                            <td>Settembre</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>Febbraio</td>
                            <td>H</td>
                            <td>Giugno</td>
                            <td>R</td>
                            <td>Ottobre</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td>Marzo</td>
                            <td>L</td>
                            <td>Luglio</td>
                            <td>S</td>
                            <td>Novembre</td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td>Aprile</td>
                            <td>M</td>
                            <td>Agosto</td>
                            <td>T</td>
                            <td>Dicembre</td>
                        </tr>
                    </table>
                </li>
                <li>
                    Giorno di nascita e sesso (due cifre, decimo e undicesimo carattere): si prendono le due
                    cifre del giorno di nascita (se è compreso tra 1 e 9 si pone uno zero come prima cifra);
                    per i soggetti di sesso femminile, a tale cifra va sommato il numero 40. In questo modo
                    il campo contiene la doppia informazione giorno di nascita e sesso: i maschi avranno il
                    giorno con cifra da 01 a 31, mentre le donne da 41 a 71.
                </li>
            </ul>
        </p>
        <hr />
        <?php
        $str = "PTRNDR06T29B819X";
        $codFisc = str_split($str);

        $annoDiNascita = $codFisc[6] . $codFisc[7];
        $meseDiNascita = $codFisc[8];
        $giornoDiNascita = $codFisc[9] . $codFisc[10];

        $meseDiNascita = match ($meseDiNascita) {
            "A" => "Gennaio",
            "B" => "Febbraio",
            "C" => "Marzo",
            "D" => "Aprile",
            "E" => "Maggio",
            "H" => "Giugno",
            "L" => "Luglio",
            "M" => "Agosto",
            "P" => "Settembre",
            "R" => "Ottobre",
            "S" => "Novembre",
            "T" => "Dicembre"
        };

        if ($giornoDiNascita > 31) {
            $giornoDiNascita = $giornoDiNascita - 40;
            $sesso = "Femmina";
        } else {
            $sesso = "Maschio";
        }

        echo $giornoDiNascita . "/" . $meseDiNascita . "/" . $annoDiNascita . ", Sesso: " . $sesso;
        ?>
    </body>
</html>