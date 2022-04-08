<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Itunes</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="kontainer">
        <h1>ITunes musikdatabas sök</h1>
        <form action="#" method="post">
            <label>Sök artistnamn</label><input type="text" name="search">
            <button>Sök</button>
        </form>
        <?php
        $sök = filter_input(INPUT_POST, "search", FILTER_SANITIZE_STRING);
        if ($sök) {
            // cst = correct search term
            $cst = str_replace(' ', '+', $sök);
            $cst2 = $cst . "&entity=song&limit=5";
            $url = "https://itunes.apple.com/search?term=$cst2";
            $json = file_get_contents("$url");

            $jsonData = json_decode($json);
            $resultCount = $jsonData->resultCount;
            $results = $jsonData->results;

            echo "<table><tr><th>Top 5 songs by $sök</th></tr>";
            echo "<theader>
            <tr>
            <th>Bild</th>
            <th>Spår</th>
            <th>Artist</th>
            <th>Tid</th>            
            </tr>
            </theader>";
            foreach ($results as $i) {
                $track = $i->trackName;
                $genre = $i->primaryGenreName;
                $bild = $i->artworkUrl100;
                $tid = $i->trackTimeMillis / 1000;
                echo "<tr><td><img src=\"$bild\">$track - $genre - $tid</td></tr>";
            }
            echo "</table>";
        }

        ?>
    </div>
</body>
</html>