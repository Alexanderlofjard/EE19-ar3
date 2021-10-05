<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Formulär</h1>
        <?php
        // Ta emot data som skickas
        // Ta emot data som skickas
        $anamn = filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
        $kon = filter_input(INPUT_POST, 'kon', FILTER_SANITIZE_STRING);
        $alder = filter_input(INPUT_POST, 'alder', FILTER_SANITIZE_STRING);
        $verb = filter_input(INPUT_POST, 'verb', FILTER_SANITIZE_STRING);
        $adjektiv = filter_input(INPUT_POST, 'adjektiv', FILTER_SANITIZE_STRING);
        $subjektiv = filter_input(INPUT_POST, 'subjektiv', FILTER_SANITIZE_STRING);

       
       echo "Den gamle mannen, vars namn var $anamn, han var en ynklig $kon, och han var $alder år gammal, hans favorit aktivitet är $verb, och han anser sig sjäv vädligt $adjektiv, när han håller i sin $subjektiv";
       
       
        //echo "$anamn $losen";

        // Kolla om användarnamn och lösenord stämmer
        // Kolla om användarnamn och lösenord stämmer

        

        ?>
    </div>
</body>
</html>