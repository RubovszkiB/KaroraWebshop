
<?php
require_once 'db.php';

$stmt = $pdo->prepare("SELECT * FROM products WHERE brand = 'Rolex'");
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rolex Órák</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-secondary text-white fw-bold">
    <div class="container-fluid">
      <a class="navbar-brand text-white fs-3 fw-bold" href="index.php">Óra Webshop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fs-6">
          <li class="nav-item"><a class="nav-link text-white" href="index.php">Főoldal</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Rólunk</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Admin</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="kosar.php">🛒 Kosár</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Terméklista -->
  <div class="container my-5 flex-grow-1">
    <h1 class="text-center mb-5">Rolex Top 10 termékek</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <?php foreach ($products as $product): ?>
      <div class="col">
        <a href="product.php?id=<?= $product['id'] ?>" class="text-decoration-none">
          <div class="card h-100 shadow-sm">
            <img src="<?= htmlspecialchars($product['image_url']) ?>" 
                 class="card-img-top" 
                 alt="<?= htmlspecialchars($product['name']) ?>"
                 style="height: 250px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title text-dark"><?= htmlspecialchars($product['name']) ?></h5>
              <p class="fw-bold text-success"><?= number_format($product['price'], 0, ',', ' ') ?> Ft</p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer bg-info text-white text-center p-3 mt-auto">
    <div class="container">
      <p class="mb-0">Elérhetőség: +36 20 123 4567 - Miskolc, Kandó Kálmán tér 1.</p>
      <p>Adatvédelem | Felhasználási Feltételek | Süti Kezelés</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
