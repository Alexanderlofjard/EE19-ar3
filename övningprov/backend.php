<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spara highscore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Resultatet</h1>
        <?php
        // Ta emot data från formuläret och spara i variabler
        $fnamn = filter_input(INPUT_POST, "fnamn");
        $enamn = filter_input(INPUT_POST, "enamn");
        $epost = filter_input(INPUT_POST, "epost");
        $ålder = filter_input(INPUT_POST, "ålder");

        // Testar
        //var_dump($namnet, $mobilen, $hscoren);

        // Kontroll att highscoren är korrekt
        if ($ålder <= 5 || $ålder > 100) {
            // Skriv ut ett error
            echo "<p class=\"alert alert-danger\">Du kan inte vara under 5 eller 100 år</p>";
        } else {

            // Skriv ut ett fint svar
            echo "<p>Hej $fnamn  $enamn.</p>";
            echo "<p>$fnamn din epost är $epost.</p>";

            // Bekräfta att highscoren sparats
            echo "<p class=\"alert alert-success\">Lyckades!</p>";
        }
        ?>
    </div>
</body>
</html>