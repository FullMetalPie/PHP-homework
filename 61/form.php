<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 61 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 61</h1>
        <h2 style="font-style: oblique; color: blue">Invio dati</h2>
        <p>Scrivere un’applicazione PHP per verificare se un indirizzo IPv4 sia valido o meno; individuarne,
        inoltre, la classe di appartenenza.</p>
        <hr />
        <form name="dati" action="output.php" method="post">
            <fieldset style="width:fit-content">
                <lable><strong>Indirizzo IPv4:</strong></lable><br />
                <input type="number" name="primo" min="1" max="255" placeholder="0"/>.
                <input type="number" name="secondo" min="0" max="255" placeholder="0" />.
                <input type="number" name="terzo" min="0" max="255" placeholder="0" />.
                <input type="number" name="quarto" min="0" max="255" placeholder="0" />
            </fieldset><br />
            <input type="submit" name="pulsante" value="Invio" />
        </form>
    </body>
</html>