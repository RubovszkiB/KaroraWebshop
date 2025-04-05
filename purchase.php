<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: kosar.php');
    exit;
}

$user = $_SESSION['user'];

// Itt lehetne menteni a rendelést adatbázisba, vagy emailt küldeni
echo "<h1>Köszönjük a vásárlást, " . htmlspecialchars($user['name']) . "!</h1>";
echo "<p>A rendelés feldolgozás alatt van.</p>";
?>
