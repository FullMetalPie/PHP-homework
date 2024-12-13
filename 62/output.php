<!DOCTYPE html>
<html>
    <head>
        <title>Esercizio 62 | Pietri Andrea 5AI</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1>Esercizio 62</h1>
        <h2 style="font-style: oblique; color: blue">Ricezione dati</h2>
        <p><strong>YouTube URL shortener</strong>. Realizzare un’applicazione che permetta di abbreviare gli URL dei video
            di YouTube. L’utente dovrà fornire l’indirizzo del video, ottenendo un link funzionante.
        </p>
        <hr />
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (empty($_POST["link"])) {
                $_DATA["link"] = "Nessun link inserito.";
            } else {
                $_DATA["link"] = $_POST["link"];
            }
        }

        echo "<p><strong>Link inserito:</strong><a href=\"" . $_DATA["link"] . "\" target=\"blank_\">" . $_DATA["link"] . "</a><br/>";
        $str = $_DATA["link"];
        $str = explode("/", $str);

        $str[2] = "youtu.be";
        $_DATA["link_short"] = $str[0] .= "//" . $str[2];

        $str_linkCode = explode("=", $str[3]);
        unset($str_linkCode[0]);
        
        $_DATA["link_short"] .=  "/" . $str_linkCode[1];
        
        echo "<strong>Link abbreviato:</strong><a href=\"" . $_DATA["link_short"] . "\" target=\"blank_\">" . $_DATA["link_short"] . "</a></p>";
        ?>
    </body>
</html>
