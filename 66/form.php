<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 66 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        <style>
            form {
                width: fit-content;
                padding: 1em;
            }
            input {
                width: 4em;
                margin-bottom: 0.5em;
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 66</h1>
        <h2 style="font-style: oblique; color: blue">Invio dati</h2>
        <p>
            Scrivere un’applicazione che permetta di calcolare la media geometrica fra 5 valori positivi; la media
            geometrica di n termini è la radice n-esima del prodotto degli n valori.
        </p>
        <hr />
        <form name="dati" action="output.php" method="post">
            <fieldset>
                <legend>Media geometrica</legend>
                <label><span style="font-weight: bold;">5 valori</span><br />
                    <input type="number" min="1" placeholder="2" name="valori[]" required="required" /><br />
                    <input type="number" min="1" placeholder="5" name="valori[]" required="required" /><br />
                    <input type="number" min="1" placeholder="10" name="valori[]" required="required" /><br />
                    <input type="number" min="1" placeholder="7" name="valori[]" required="required" /><br />
                    <input type="number" min="1" placeholder="9" name="valori[]" required="required" /><br />
                </label>
                <input type="submit" value="Invia" />
            </fieldset>
        </form>
    </body>
</html>