<?php
// Slå på felrapportering
ini_set("display_errors", 1);
error_reporting(E_ALL);

// Uppgifter för databasen, användare, lösenord...
$användare = "bloggen_db";
$lösenord = "BY]dylz4.Lj5dr_X";
$databas = "bloggen_db";
$host = "localhost";

// Logga in
$conn = new mysqli($host, $användare, $lösenord, $databas);

// Gick det att ansluta?
if ($conn->connect_error) {
    die("Nånting blev fel " . ($conn->connect_error));
} else {
    //echo "<p>Det funkade att ansluta till db.</p>";
}

?>