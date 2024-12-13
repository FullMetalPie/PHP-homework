<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 67 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        <style>
            form {
                width: fit-content;
                padding: 1em;
            }
            input {
                margin-bottom: 0.5em;
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 67</h1>
        <h2 style="font-style: oblique; color: blue">Invio dati</h2>
        <p>
            <strong>Formula di Luhn.</strong> Scrivere un’applicazione che permetta di validare il numero di una carta di credito
            (formato 9999-9999-9999-9999). L’ultima delle 16 cifre è di controllo (cifra di Luhn); per verificare
            la validità di un numero di carta di credito:
            <ul>
                <li>
                    partendo da destra e spostandosi verso sinistra, moltiplicare per 2 ogni cifra posta in posizione
                    pari (l’ultima cifra a destra è in posizione 1);
                </li>
                <li>
                    laddove la moltiplicazione ha dato un risultato a due cifre, sommare le due cifre per ottenerne
                    una sola (per es., 9 x 2 = 18 = 1 + 8 = 9);
                </li>
                <li>
                    sommare tutte le nuove 16 cifre così ottenute.
                </li>
            </ul>
            Se la somma complessiva è divisibile per 10, la carta è valida. Ad esempio, supponendo di avere il
            numero di carta 4716-4359-1733-0099:<br />
            9 + 9 + 0 + 0 + 3 + 6 + 7 + 2 + 9 + 1 + 3 + 8 + 6 + 2 + 7 + 8 = <strong>80</strong> &rarr; <span style="color: red">Carta valida</span> 
        </p>
        <hr />
        <form name="dati" action="output.php" method="post">
            <fieldset>
                <legend>Formula di Luhn</legend>
                <label><strong>Numero di carta:</strong><br />
                    <input type="number" name="carta" maxlength="16" placeholder="9999-9999-9999-9999" required="required" /><br />
                </label>
                <input type="submit" value="Invia" />
            </fieldset>
        </form>
    </body>
</html>