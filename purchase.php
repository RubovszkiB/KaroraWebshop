<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: kosar.php');
    exit;
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rendelés visszaigazolás</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .confirmation-container {
      margin-top: 50px;
      margin-bottom: 50px;
    }
    .section-title {
      margin-top: 30px;
      margin-bottom: 15px;
      border-bottom: 2px solid #dee2e6;
      padding-bottom: 5px;
    }
  </style>
</head>
<body>
  <div class="container confirmation-container">
    <div class="card shadow-sm">
      <div class="card-body">
        <h1 class="card-title text-success">Köszönjük a vásárlást, <?php echo htmlspecialchars($user['name']); ?>!</h1>
        <p class="card-text">A rendelés feldolgozás alatt van. Amint elkészül, e-mailben értesítjük a részletekről.</p>
        <hr>
        <h3 class="section-title">Fizetési információk</h3>
        <p>Kérjük, a rendelés végösszegét az alábbi bankszámlaszámra utalja át:</p>
        <ul>
          <li><strong>Számlatulajdonos:</strong> Óra Webshop Kft.</li>
          <li><strong>Számlaszám:</strong> 12345678-12345678-12345678</li>
          <li><strong>Bank:</strong> OTP Bank</li>
        </ul>
        <p>Az átutalás beérkezése után e-mailben elküldjük a számlát és a rendelés visszaigazolását.</p>
        <hr>
        <h3 class="section-title">Szállítási feltételek</h3>
        <p>A rendelést általában 2-3 munkanapon belül kiszállítjuk. A szállítási díj 1500 Ft, de 100 000 Ft feletti rendelés esetén ingyenes.</p>
        <p>További információért kérjük, vegye fel a kapcsolatot ügyfélszolgálatunkkal a <a href="mailto:ugyfelszolgalat@orawebshop.hu">ugyfelszolgalat@orawebshop.hu</a> címen.</p>
        <div class="text-center mt-4">
          <a href="index.php" class="btn btn-primary">Vissza a főoldalra</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
