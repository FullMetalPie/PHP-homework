<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 73 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
        <style>
            form {
                border: 1px solid black;
                width: fit-content;
                padding: 10px;
            }
            label {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h1>Esercizio 73</h1>
        <h2 style="font-style: oblique; color: blue">Invio dati</h2>
        <p>Una società di statistica intende realizzare un’applicazione Web per la raccolta di alcuni dati
            personali di studenti universitari emiliani del primo anno. Sono richiesti:
            <ul>
                <li>l'età;</li>
                <li>il sesso;</li>
                <li>l'università emiliana di appartenenza:</li>
                    <ul>
                        <li>Bologna;</li>
                        <li>Parma;</li>
                        <li>Modena - Reggio Emilia;</li>
                        <li>Ferrara;</li>
                    </ul>
                <li>il voto ottenuto all’esame di Stato (da 60 a 100; considerare anche l’eventuale lode);</li>
                <li>i voti degli ultimi 5 esami sostenuti (18 ÷ 30, con eventuale lode), con i relativi crediti (1 ÷ 10);</li>
                <li>autorizzazione esplicita al trattamento dei dati personali.</li>
            </ul>
            Visualizzare nel modo che si ritiene più consono i dati acquisiti e validati.
        </p>
        <hr />
        <form name="dati" action="output.php" method="post">
            <fieldset>
                <legend>Dati personali</legend>
                <!--Età-->
                <label>Età</label><br />
                <input type="number" name="age" min="18" placeholder="18 anni" required="required" /><br />
                <!--Sesso-->
                <label>Sesso</label><br />
                <input type="radio" name="sex" value="Maschio" required="required" />Maschio<br />
                <input type="radio" name="sex" value="Femmina" required="required" />Femmina<br />
                <input type="radio" name="sex" value="Non specificato" required="required" />Preferisco non specificarlo<br />
            </fieldset>
            <fieldset>
                <legend>Dati universitari</legend>
                <!--Università-->
                <label>Università di appartenenza</label><br />
                <select name="university">
                    <option value="Bologna">Bologna</option>
                    <option value="Bologna">Parma</option>
                    <option value="Bologna">Modena - Reggio Emilia</option>
                    <option value="Bologna">Ferrara</option>
                </select><br />
                <!--Esame di stato-->
                <label>Voto Esame di Stato</label><br />
                <input type="number" name="esameStato" min="60" max="100" placeholder="60" required="required" />
                <input type="checkbox" name="lodeStato" value= "con lode" >Lode<br />
                <!--Voti ultimi 5 esami-->
                <label>Voti degli ultimi 5 esami,<br /> con relativi crediti</label><br />
                <!--Esame 1-->
                <input type="number" name="esame[]" min="18" max="30" placeholder="60" />
                <input type="number" name="crediti[]" min="1" max="10" placeholder="1" required= "required" />
                <input type="checkbox" name="lode[]" value= "con lode" >Lode<br />
                <!--Esame 2-->
                <input type="number" name="esame[]" min="18" max="30" placeholder="60"  />
                <input type="number" name="crediti[]" min="1" max="10" placeholder="1" required= "required" />
                <input type="checkbox" name="lode[]" value= "con lode" >Lode<br />
                <!--Esame 3-->
                <input type="number" name="esame[]" min="18" max="30" placeholder="60"  />
                <input type="number" name="crediti[]" min="1" max="10" placeholder="1" required= "required" />
                <input type="checkbox" name="lode[]" value= "con lode" >Lode<br />
                <!--Esame 4-->
                <input type="number" name="esame[]" min="18" max="30" placeholder="60"  />
                <input type="number" name="crediti[]" min="1" max="10" placeholder="1" required= "required" />
                <input type="checkbox" name="lode[]" value= "con lode" >Lode<br />
                <!--Esame 5-->
                <input type="number" name="esame[]" min="18" max="30" placeholder="60"  />
                <input type="number" name="crediti[]" min="1" max="10" placeholder="1" required= "required" />
                <input type="checkbox" name="lode[]" value= "con lode" >Lode<br />
                <!--Dati personali-->
                <hr />
                Accetto al trattamento dei dati personali.<br/>
                <input type="checkbox" name="personal_data" value="si">Accetto</input>
            </fieldset>
            <input type="submit" name="submit" value="Invio" />
        </form>
    </body>
</html>