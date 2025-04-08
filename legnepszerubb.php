<?php
require_once 'db.php';

// Legnépszerűbb termékek lekérdezése (Rolex, Casio, Seiko márkák, ár szerint csökkenő)
$stmt = $pdo->prepare("
    SELECT * FROM products 
    WHERE brand IN ('Rolex', 'Casio', 'Seiko')
    ORDER BY price DESC 
    LIMIT 9
");
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Legnépszerűbb Órák</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .spring-sale {
      background-color: #ff6b6b;
      color: white;
      padding: 1rem;
      font-weight: bold;
      font-size: 1.2rem;
    }
    .category-card {
      height: 300px;
      overflow: hidden;
      transition: transform 0.3s;
    }
    .category-card:hover {
      transform: scale(1.03);
    }
    .overlay-text {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 1rem;
      font-size: 1.2rem;
      text-align: center;
    }
  </style>
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

  <!-- AKCIÓ -->
  <div class="spring-sale text-center">
    Tavaszi akció – 10% kedvezmény a legnépszerűbb órákra!
  </div>

  <!-- LEGNÉPSZERŰBB ÓRÁK -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Legnépszerűbb Óráink</h2>
    <div class="row g-4 justify-content-center">
      <?php 
      $counter = 0;
      while ($counter < count($products)): 
        $product = $products[$counter]; 
      ?>
      <div class="col-md-4">
        <a href="product.php?id=<?= $product['id'] ?>" class="text-decoration-none">
          <div class="category-card position-relative rounded-4">
            <img src="<?= htmlspecialchars($product['image_url']) ?>" 
                 alt="<?= htmlspecialchars($product['name']) ?>" 
                 class="img-fluid w-100 h-100 object-fit-cover">
            <div class="overlay-text">
              <?= htmlspecialchars($product['name']) ?><br>
              <span class="text-success"><?= number_format($product['price'], 0, ',', ' ') ?> Ft</span>
            </div>
          </div>
        </a>
      </div>
      <?php 
        $counter++;
      endwhile; 
      ?>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="footer bg-info text-white text-center p-3 mt-auto">
    <div class="container">
      <p class="mb-0">Elérhetőség: +36 20 123 4567 - Miskolc, Kandó Kálmán tér 1.</p>
      <p>Adatvédelem | Felhasználási Feltételek | Süti Kezelés</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>