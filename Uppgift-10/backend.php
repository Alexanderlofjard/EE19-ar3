<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h3>Namn</h3>
    <p></p>
<?php
$brutto = filter_input(INPUT_POST, "brutto", FILTER_SANITIZE_STRING);
$sats = filter_input(INPUT_POST, "riktning", FILTER_SANITIZE_STRING);
$namn
?>