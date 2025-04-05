<?php
// db.php: Kapcsolódás létrehozása a mkodo adatbázishoz a webshopban

// Konfigurációs adatok beolvasása
require_once 'config.php';

// MySQLi kapcsolat létrehozása
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Kapcsolat ellenőrzése
if ($connection->connect_error) {
    die("Kapcsolódási hiba: " . $connection->connect_error);
}

// Karakterkódolás beállítása
$connection->set_charset("utf8");

// A $connection változó mostantól használható az adatbázis műveletekhez
?>
