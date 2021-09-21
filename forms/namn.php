<?php
// Tar emot data från formuläret
$namn = $_POST["namn"];
$adress = $_POST["adress"];
$mobil  = $_POST["mobi"];

//Om namnet är Olle
if ($namn == Olle) {
    echo "<p>Tjo du är tillbaka</p>";
}else {
    echo "<p>Tjo är du ny här</p>";
}
?>