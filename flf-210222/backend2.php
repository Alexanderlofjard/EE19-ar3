<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spara Highscore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kontainer">
    <h1>Resultatet</h1>
    <?php
    //Ta emot data från formuläret och spara i variabler
    $texten = filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);
    $namnet = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);

    file_put_contents("$namnet.txt", "$texten");

    echo "<p class=\"alert alert-success\">Din text är Sparad i $namnet.txt</p>";
    
   


    ?>
</div>
</body>
</html>