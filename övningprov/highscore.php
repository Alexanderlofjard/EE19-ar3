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
        <h1>Spara highscore</h1>
        <form action="backend.php" method="POST">
            <label for="namn">Förnamn</label>
            <input id="namn" class="form-control" type="text" name="fnamn" required>

            <label for="mobil">Efternamn</label>
            <input id="mobil" class="form-control" type="text" name="enamn" required>

            <label for="hscore">Epost</label>
            <input id="hscore" class="form-control" type="text" name="epost" required>

            <label for="hscore">Ålder</label>
            <input id="hscore" class="form-control" type="text" name="ålder" required>

            <button type="submit" class="btn btn-primary">Spara</button>
        </form>
    </div>
</body>

</html>