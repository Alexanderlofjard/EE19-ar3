<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Min enkla blogg</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/minty/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <h1>Bloggen</h1>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class=" nav-link" href="../index.php">Mina inlägg</a></li>
                    <li class="nav-item"><a class="active nav-link" href="spara.php">Admin</a></li>
                </ul>
            </nav>
        </header>
        <main>

            <form action="./spara.php" method="post"><label for="">Rubrik</label>
                <input type="text" name="rubrik" required>
                <label for="">Meddelande</label>
                <Textarea name="meddelande" required></Textarea>
                <button>Skicka</button>
            </form>

        </main>
        <footer>
            Höst 2021
        </footer>
    </div>
</body>
</html>