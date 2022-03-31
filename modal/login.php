<?php
include "konfigdb.php";
// Ta emot data från formuläret
$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");

 // Kolla att det inte är null
 if ($email && $password) {

    //Kolla att användarnamnet eller email inte redan används
    $sql = "SELECT * FROM register WHERE epost = '$email'";

    // 2. Kör SQL-kommandot
    $resultat = $conn->query($sql);

    // Gick det bra att köra SQL satsen?
    if (!$resultat) {
        echo "Någonting är fel med SQL-satsen";
    } else {

        // Plocka ut svaret och lägg det i arrayen $rad[]
        $rad = $resultat->fetch_assoc();

        // Kolla om lösendordet och hashen matchar
        if (password_verify($lösenord, $rad["hash"])) {
            echo ">Du är inloggad";
        } else {
            echo "Epost eller lösenord stämmer inte";
        }
    }
 }
?>