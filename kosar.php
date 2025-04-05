<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kosár</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery szükséges lehet az egyszerűbb kezeléshez -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
          <li class="nav-item"><a class="nav-link text-white" href="rolunk.php">Rólunk</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Admin</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="kosar.php">🛒 Kosár</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- KOSÁR TARTALOM -->
  <div class="container my-5 flex-grow-1">
    <h2 class="text-center mb-4">Kosár tartalma</h2>
    <div id="cart-items" class="row g-4 justify-content-center">
      <!-- Dinamikusan töltjük be a kosár elemeit a localStorage-ból (JS kezeli a kliensoldali elemeket) -->
    </div>
    <div class="text-end mt-4">
      <h4 id="total-amount">Végösszeg: 0 Ft</h4>
      <!-- A megrendelés leadása gomb modal triggerként működik -->
      <button class="btn btn-success" id="placeOrderBtn" data-bs-toggle="modal" data-bs-target="#orderModal">Megrendelés leadása</button>
    </div>
  </div>

  <!-- MODÁL: Bejelentkezés/Regisztráció / Vásárlás megerősítése -->
  <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="orderModalLabel">Fizetés és bejelentkezés</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Bezár"></button>
        </div>
        <div class="modal-body">
          <?php if (!isset($_SESSION['user'])): ?>
            <!-- Ha nincs bejelentkezve, jelenjen meg a bejelentkezés/regisztráció -->
            <ul class="nav nav-tabs" id="authTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Bejelentkezés</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Regisztráció</button>
              </li>
            </ul>
            <div class="tab-content mt-3" id="authTabContent">
              <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <form action="login.php" method="post" id="loginForm">
                  <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="loginEmail" required>
                  </div>
                  <div class="mb-3">
                    <label for="loginPassword" class="form-label">Jelszó</label>
                    <input type="password" name="password" class="form-control" id="loginPassword" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Bejelentkezés</button>
                </form>
              </div>
              <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <form action="register.php" method="post" id="registerForm">
                  <div class="mb-3">
                    <label for="registerName" class="form-label">Név</label>
                    <input type="text" name="name" class="form-control" id="registerName" required>
                  </div>
                  <div class="mb-3">
                    <label for="registerEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="registerEmail" required>
                  </div>
                  <div class="mb-3">
                    <label for="registerPassword" class="form-label">Jelszó</label>
                    <input type="password" name="password" class="form-control" id="registerPassword" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Regisztráció</button>
                </form>
              </div>
            </div>
          <?php else: ?>
            <!-- Ha be van jelentkezve, jelenjen meg a vásárlás megerősítése -->
            <div class="text-center">
              <h4>Ön be van jelentkezve: <?php echo htmlspecialchars($_SESSION['user']['name']); ?></h4>
              <p>Kérjük, erősítse meg a vásárlást!</p>
              <form action="purchase.php" method="post">
                <button type="submit" class="btn btn-success btn-lg">Vásárlás véglegesítése</button>
              </form>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="footer bg-info text-white text-center p-3 mt-auto">
    <div class="container">
      <p class="mb-0">Elérhetőség: +36 20 123 4567 - Miskolc, Kandó Kálmán tér 1.</p>
      <p>Adatvédelem | Felhasználási Feltételek | Süti Kezelés</p>
    </div>
  </footer>

  <!-- JavaScript: Bootstrap és a kosár kliensoldali kezelése -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Példa: A kosár elemeit a localStorage-ból tölti be, és megjeleníti azokat.
    let cartItems = JSON.parse(localStorage.getItem("cart")) || [];
    const cartContainer = document.getElementById("cart-items");
    const totalAmountEl = document.getElementById("total-amount");
    let total = 0;
    
    cartItems.forEach((item, index) => {
      total += item.price * item.quantity;
      cartContainer.innerHTML += `
        <div class="col-md-6 col-lg-4">
          <div class="card shadow-sm">
            <img src="${item.image}" class="card-img-top" alt="${item.name}">
            <div class="card-body">
              <h5 class="card-title">${item.name}</h5>
              <p class="card-text">${item.description}</p>
              <p class="fw-bold text-success">${item.price.toLocaleString()} Ft x ${item.quantity}</p>
              <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-sm btn-danger" onclick="removeItem(${index})">Törlés</button>
                <div>
                  <button class="btn btn-sm btn-secondary" onclick="decreaseQuantity(${index})">-</button>
                  <span class="mx-2">${item.quantity}</span>
                  <button class="btn btn-sm btn-secondary" onclick="increaseQuantity(${index})">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      `;
    });
    totalAmountEl.textContent = `Végösszeg: ${total.toLocaleString()} Ft`;

    function removeItem(index) {
      cartItems.splice(index, 1);
      localStorage.setItem("cart", JSON.stringify(cartItems));
      location.reload();
    }
    function increaseQuantity(index) {
      cartItems[index].quantity += 1;
      localStorage.setItem("cart", JSON.stringify(cartItems));
      location.reload();
    }
    function decreaseQuantity(index) {
      if (cartItems[index].quantity > 1) {
        cartItems[index].quantity -= 1;
      } else {
        removeItem(index);
        return;
      }
      localStorage.setItem("cart", JSON.stringify(cartItems));
      location.reload();
    }
  </script>
</body>
</html>
