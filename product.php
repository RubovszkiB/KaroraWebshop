
<?php
require_once 'db.php';

if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit();
}

$productId = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$productId]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($product['name']) ?></title>
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

  <!-- Termék részletek -->
  <div class="container my-5 flex-grow-1">
    <div class="row">
      <div class="col-md-6">
        <img src="<?= htmlspecialchars($product['image_url']) ?>" class="img-fluid rounded-3 shadow" alt="<?= htmlspecialchars($product['name']) ?>">
      </div>
      <div class="col-md-6">
        <h1 class="mb-4"><?= htmlspecialchars($product['name']) ?></h1>
        <p class="lead"><?= htmlspecialchars($product['description']) ?></p>
        <h3 class="text-success mb-4"><?= number_format($product['price'], 0, ',', ' ') ?> Ft</h3>
        
        <div class="d-flex align-items-center gap-3 mb-4">
          <input type="number" id="quantity" class="form-control" value="1" min="1" style="width: 100px;">
          <button class="btn btn-primary btn-lg" onclick="addToCart()">Kosárba helyezés</button>
        </div>
        
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Termékleírás</h5>
            <p class="card-text"><?= nl2br(htmlspecialchars($product['description'])) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Toast értesítő -->
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="cartToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body"></div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
      </div>
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
  <script>
    function addToCart() {
      const product = {
        id: <?= $product['id'] ?>,
        name: "<?= addslashes($product['name']) ?>",
        price: <?= $product['price'] ?>,
        quantity: parseInt(document.getElementById('quantity').value),
        image: "<?= addslashes($product['image_url']) ?>",
        description: "<?= addslashes($product['description']) ?>"
      };

      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      const existing = cart.find(item => item.id === product.id);
      
      if (existing) {
        existing.quantity += product.quantity;
      } else {
        cart.push(product);
      }

      localStorage.setItem("cart", JSON.stringify(cart));
      
      // Toast megjelenítése
      const toastEl = document.getElementById('cartToast');
      toastEl.querySelector('.toast-body').textContent = `${product.name} hozzáadva (${product.quantity} db)`;
      new bootstrap.Toast(toastEl).show();
    }
  </script>
</body>
</html>
