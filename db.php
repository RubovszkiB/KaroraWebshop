<?php
$host = 'server.fh2.hu';
$dbname = 'v2labgwj_kando5';
$username = 'v2labgwj_kando5';
$password = 'ZJVWEkpkWk9MYYfLJjft';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kapcsolódási hiba: " . $e->getMessage());
}
?>
