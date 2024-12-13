<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 62 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        <style>
            form {
                border: 1px solid black;
                width: fit-content;
                padding: 1em;
            }
            label {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 62</h1>
        <h2 style="font-style: oblique; color: blue">Invio dati</h2>
        <p><strong>YouTube URL shortener</strong>.<br /> Realizzare un’applicazione che permetta di abbreviare gli URL dei video
            di YouTube. L’utente dovrà fornire l’indirizzo del video, ottenendo un link funzionante.
        </p>
        <hr />
        <form name="dati" action="output.php" method="post">
            <label>Inserisci un link youtube:<br />
                <input type="textarea" name="link" required="required" placeholder="https://www.youtube.com/...">
            </label><br />
            <input type="submit" value="Invia">
        </form>
    </body>
</html>