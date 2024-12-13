<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 63 | Pietri Andrea 5AI</title>
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
            label {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 63</h1>
        <h2 style="font-style: oblique; color: blue">Invio dati</h2>
        <p>
            Realizzare una semplice applicazione PHP per l’acquisizione di dati personali. Mediante un form
            HTML, sono richiesti all’utente nome, cognome e indirizzo e-mail; quest’ultimo, affinché si sia certi
            della sua correttezza, dovrà essere richiesto due volte in due distinti campi. Validare sul lato server
            l’e-mail dell’utente confrontando quindi i due indirizzi acquisiti, ignorando però gli eventuali punti
            presenti prima della chiocciola (ad esempio, il controllo è positivo per “ing.mario.rossi@gmail.com”
            e “ingmariorossi@gmail.com”). Memorizzare i dati acquisiti in un’apposita e unica struttura dati;
            generare quindi in modo dinamico una tabella HTML riportante quanto acquisito.
        </p>
        <hr />
        <form name="dati" action="output.php" method="post">
            <fieldset>
                <legend>Dati personali</legend>
                <label>Nome<br />
                    <input type="text" name="nome" required="required" placeholder="Mario" />
                </label><br />
                <label>Cognome<br />
                    <input type="text" name="cognome" required="required" placeholder="Rossi" />
                </label><br />
                <label>Email<br />
                    <input type="email" name="email" required="required" placeholder="rossimario@gmail.com" />
                </label><br />
                <label>Ripeti email<br />
                    <input type="email" name="email2" required="required" placeholder="rossimario@gmail.com" />
                </label><br />
                <input type="submit" value="Invia" />
            </fieldset>
        </form>
    </body>
</html>