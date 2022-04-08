<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens Väder</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Sök Nasa Bilder</h1>
        <form action="#" method="post">
            <label>Ange datum</label><input type="date" name="datum" placeholder="YYYY-MM-DD">
            <button>Sök</button>
        </form>
        <?php

        $datum = filter_input(INPUT_POST, "datum");

        // Tjänsten
        $url = "https://api.nasa.gov/planetary/apod?api_key=Alf0KCGpN9xbKyhCGhnVceVSAEnQVs7V8Dw7sUDq&date=$datum";

        // Anropa apiet
        $json = file_get_contents($url);

        // Avkoda JSON
        $jsonData = json_decode($json);

        // Plocka ut copyright
        $copyright = $jsonData->copyright;

        // Plocka ut bild
        $bild = $jsonData->url;

        // Plocka ut beskrivning
        $beskrivning = $jsonData->explanation;

        // Skriv ut bild
        echo "<img src=\"$bild\">";

        // Skriv ut beskrivning
        echo "<p>$beskrivning</p>";

        // Skriv ut copyright
        echo "<footer>$copyright</footer>"

        ?>

    </div>
</body>

</html>