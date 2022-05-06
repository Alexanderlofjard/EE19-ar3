<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biltema shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Webbshop</h1>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="./shop.php">Lägg till</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./kundvagn.php">Kundvagnen</a>
            </li>
        </ul>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Produkt</label>
                <input type="text" class="form-control" name="produkt" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1"  class="form-label">Pris</label>
                <input type="text" name="pris" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1"  class="form-label">Artikelnummer</label>
                <input name="artnr" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1"  class="form-label">Antal</label>
                <input name="antal" type="text" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        // Ta emot data från formuläret
        $produkt = filter_input(INPUT_POST, "produkt");
        $pris = filter_input(INPUT_POST, "pris");
        $artnr = filter_input(INPUT_POST, "artnr");
        $antal = filter_input(INPUT_POST, 'antal');
        var_dump($produkt, $pris, $artnr);
        $textfil = "kundvagn.txt";
        

        // Får vi data från formuläret isåfall spara ned
        if ($produkt && $pris && $artnr && $antal) {
            // Klockslag
            $total = $antal * $pris;
            $klockslag = date("Y-m-d H:i:s");  
            $innehåll = "$klockslag\t$produkt\t$pris\t$antal\t$artnr\t$total\n";
            var_dump($innehåll);
            // Spara ned i en textfil som heter kundvagn.txt
            file_put_contents($textfil, $innehåll, FILE_APPEND);

            // Meddela användaren att vi lyckats spara i kundvagnen
            echo "Innehållet har sparats i textfil";
        }
        ?>
    </div>
</body>
</html>