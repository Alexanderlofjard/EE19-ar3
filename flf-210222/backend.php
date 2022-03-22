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
    $namnet = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
    $mobilen = filter_input(INPUT_POST, "mobil", FILTER_SANITIZE_STRING);
    $highscoren = filter_input(INPUT_POST, "highscore", FILTER_SANITIZE_STRING);
    

    // Testar
   // var_dump($namnet, $mobilen, $highscoren);

   //Kontroll att highscoren är korrekt
   if ($highscoren <= 0 || $highscoren >10000000000000000000000000000) {
       // Skriv ut ett error
       echo "<p class=\"alert alert-danger\">vrf ljuger du för, skriv ut ett rimligt highscore</p>";
   } else {
         echo "<p>$namnet din highscore är $highscoren.</p>";
   echo "<p>$namnet din mobil är $mobilen.</p>";
   
   //Spara ned allt i en textfil
   file_put_contents("highscore.txt", "$namnet:$highscoren\n", FILE_APPEND);


   //Bekräfta att highscoren har sparats
   echo "<p class=\"alert alert-success\">Din highscore har sparats</p>";
   }
   


    ?>
</div>
</body>
</html>