<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 74 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        <style>
            table {
                border-collapse: collapse;
            }

            td, tr, th {
                border: 1px solid black;
                text-align: center;
            }

            form {
                /*border: 1px solid black;*/
                width: fit-content;
                padding: 10px;
            }
        </style>
    </head>
    <body>
    <h1>Esercizio 74</h1>
        <h2 style="font-style: oblique; color: blue">Ricezione dati</h2>
        <p>Un sito web di geofisica intende fornire agli utenti la possibilità di inviare segnalazioni, per mezzo di
            un modulo, sugli effetti di eventi sismici rilevanti. La società che gestisce il sito intende quindi
            commissionare la progettazione di un’applicazione che registri in un database i dati inviati in forma
            anonima dai visitatori.<br />Saranno richiesti i seguenti dati:
            <ul>
                <li>Data e ora approssimativi dell’evento.</li>
                <li>Comune, provincia e regione.</li>
                <li>Valutazione dell’intensità (secondo la scala Mercalli).</li>
                <li>Piano nel quale si è avvertita la scossa (interrato, terra, 1 ÷ 10, superiore a 10).</li>
                <li>Numero totale di piani dell’edificio.</li>
            </ul>
            La scala Mercalli è una scala di valutazione dell’intensità di un terremoto eseguita osservando gli
            effetti che esso produce sulla superficie terrestre su persone, cose e manufatti. I valori di questa
            scala sono scritti con numeri romani e vanno da I a XII:
            <table>
                <tr>
                    <th>Grado</th>
                    <th>Descrizione</th>
                    <th>Grado</th>
                    <th>Descrizione</th>
                </tr>
                <tr>
                    <td>I</td>
                    <td>impercettibile</td>
                    <td>VII</td>
                    <td>molto forte</td>
                </tr>
                <tr>
                    <td>II</td>
                    <td>molto leggera</td>
                    <td>VIII</td>
                    <td>rovinosa</td>
                </tr>
                <tr>
                    <td>III</td>
                    <td>leggera</td>
                    <td>IX</td>
                    <td>distruttiva</td>
                </tr>
                <tr>
                    <td>IV</td>
                    <td>moderata</td>
                    <td>X</td>
                    <td>completamente distruttiva</td>
                </tr>
                <tr>
                    <td>V</td>
                    <td>piuttosto forte</td>
                    <td>XI</td>
                    <td>catastrofica</td>
                </tr>
                <tr>
                    <td>VI</td>
                    <td>forte</td>
                    <td>XII</td>
                    <td>apocalittica</td>
                </tr>
            </table>
        </p>
        <hr />
        <form name="dati" action="output.php" method="post">
            <fieldset>
                <legend>Report attività sismisca</legend>
                <!-- Data e ora -->
                <legend>Data&emsp;
                    <input type="date" name="data">
                </legend>
                <legend>Ora&emsp;
                    <input type="number" name="ora">:<input type="number" name="minuti">
                </legend>
                
            </fieldset>
        </form>
    </body>
</html>