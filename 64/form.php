<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 64 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        <style>
            form {
                width: fit-content;
                padding: 1em;
            }
            fieldset {
                border: 1px solid black;
            }
            input {
                margin-bottom: 0.25em;
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 64</h1>
        <h2 style="font-style: oblique; color: blue">Invio dati</h2>
        <p>
            Scrivere un’applicazione PHP che permetta di simulare l’ordinazione di una pizza componibile,
            ovvero i cui ingredienti da aggiungere sono scelti dall’utente in una lista fino a un massimo di 12.<br />Il
            numero di ingredienti scelti determina la dimensione e il prezzo della pizza:<br />
            <ul>
                <li><strong>Normale</strong>:&ensp; 0-4;</li>
                <li><strong>Gigante</strong>:&emsp;5-8;</li>
                <li><strong>Al metro</strong>:&ensp;9-12;</li>
            </ul>
        </p>
        <hr />
        <form name="dati" method="post" action="output.php">
            <fieldset>
                <legend>Costruisci la tua pizza</legend>
                <label><span style="font-weight: bold;">Ingredienti:</span><br />
                    <input type="checkbox" name="ingredienti[]" value="Mozzarella">Mozzarella<br />
                    <input type="checkbox" name="ingredienti[]" value="Pomodoro">Pomodoro<br />
                    <input type="checkbox" name="ingredienti[]" value="Wurstel">Wurstel<br />
                    <input type="checkbox" name="ingredienti[]" value="Salsiccia">Salsiccia<br />
                    <input type="checkbox" name="ingredienti[]" value="Patatine fritte">Patatine fritte<br />
                    <input type="checkbox" name="ingredienti[]" value="Salame piccante">Salame piccante<br />
                    <input type="checkbox" name="ingredienti[]" value="Prosciutto crudo">Prosciutto crudo<br />
                    <input type="checkbox" name="ingredienti[]" value="Prosciutto cotto">Prosciutto cotto<br />
                    <input type="checkbox" name="ingredienti[]" value="Bacon">Bacon<br />
                    <input type="checkbox" name="ingredienti[]" value="Funghi">Funghi<br />
                    <input type="checkbox" name="ingredienti[]" value="Olive">Olive<br />
                    <input type="checkbox" name="ingredienti[]" value="Carciofi">Carciofi<br />
                </label>
                <input type="submit" value="Invia">
            </fieldset>
        </form>
    </body>
</html>