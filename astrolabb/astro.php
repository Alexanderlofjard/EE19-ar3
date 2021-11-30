<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens horoskop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Dagens horoskop</h1>
        <?php
        //Hämta ned webbsidan
        $url = "https://astro.elle.se/";
        $sidan = file_get_contents($url);

        // Hitta början på horoskopet
        $start = strpos($sidan, "Väduren");

        echo "<h3>Väduren</h3>";

        echo "Horoskopet börjar på position $start";

       // Sök vidare för att hitta var texten börjar
       $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
       $slutTexten = strpos($sidan, "</div>", $startTexten);
      // var_dump($start, $startTexten, $slutTexten);
        // Plocka ut horoskopet
        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
        echo "<p>$horoskop</p>";

        
        $start = strpos($sidan, "Oxen");

        echo "<h3>Oxen</h3>";
        
        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan, "</div>", $startTexten);
       // var_dump($start, $startTexten, $slutTexten);

        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
        echo "<p>$horoskop</p>";

        $start = strpos($sidan, "Tvillingarna");

        echo "<h3>Tvillingarna</h3>";
        
        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan, "</div>", $startTexten);
        //var_dump($start, $startTexten, $slutTexten);

        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
        echo "<p>$horoskop</p>";


        $start = strpos($sidan, "Kräftan");
       
        echo "<h3>Kräftan</h3>";
        
        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan, "</div>", $startTexten);
       // var_dump($start, $startTexten, $slutTexten);

        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
        echo "<p>$horoskop</p>";
        ?>

    </div>
</body>
</html>