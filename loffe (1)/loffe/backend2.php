<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultatet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Resultatet</h1>
        <?php
        // Ta emot data från formuläret och spara i variabler
        $texten = filter_input(INPUT_POST, "texten");
        $namnet = filter_input(INPUT_POST, "namnet");
        $titel = filter_input(INPUT_POST, "titel");
        $url = filter_input(INPUT_POST, "url");

        // Kontroll att texten är korrekt
        if (strlen($texten) <= 5) {
            // Skriv ut ett error
            echo "<p class=\"alert alert-danger\">Fel! Din text är för kort.</p>";
        } else if (strlen($titel) <= 4) {
            // Skriv ut ett error
            echo "<p class=\"alert alert-danger\">Fel! Din titel är för kort använd mer än 4 bokstäver.</p>";
        } else {

            // Bekräfta att texten sparats
            $filnamn = "namn.txt";

            $innehåll = "<p class=\"alert alert-success\">Din text är sparad i $namnet.txt:</p>";
            $innehåll .= "<pre class=\"alert alert-info\">$texten</pre>";
            $innehåll .= "<img src=\"$url\">";

            // Spara i textfil
            file_put_contents($filnamn, $innehåll, FILE_APPEND);

            // Läsa in all text
            $innehåll = file_get_contents($filnamn);

            // Skriver ut allt
            echo $innehåll;
        }
        ?>
    </div>
</body>

</html>