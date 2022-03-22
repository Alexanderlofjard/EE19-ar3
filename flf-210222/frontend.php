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
    <h1>Spara Highscore</h1>
    <form action="backend.php" method="POST">
        <label for="namn">Namn</label>
        <input id="namn" class="form-control" type="text" name="namn" required>
       
        <label for="mobil">Mobil</label>
        <input id="mobil" class="form-control" type="text" name="mobil" required>
        
        <label for="highscore">Highscore</label>
        <input id="highscore" class="form-control" type="text" name="highscore" required>
        
        <button type="submit" class="btn btn-primary">Spara</button>

    </form>
</div>
</body>
</html>