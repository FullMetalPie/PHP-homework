<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 65 | Pietri Andrea 5AI</title>
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
        <h1>Esercizio 65</h1>
        <h2 style="font-style: oblique; color: blue">Invio dati</h2>
        <p>
            Un lipogramma è costituito da un testo in cui non può essere usata una determinata lettera.<br /> Scrivere
            un’applicazione che permetta di verificare se una data stringa è un lipogramma.
        </p>
        <hr />
        <form name="dati" method="post" action="output.php">
            <fieldset>
                <legend>Lipogramma</legend>
                <label><span style="font-weight: bold">Lettera da controllare:</span><br />
                    <input type="text" name="lettera" maxlength="1" placeholder="A" required="required">
                </label><br />
                <label><span style="font-weight: bold">Stringa</span><br />
                    <textarea name="testo" placeholder="Ciao, come stai?" required="required"></textarea>
                </label><br />
                <input type="submit" value="Invia" />
            </fieldset>
        </form>
    </body>
</html>