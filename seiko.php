<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Seiko Órák</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-secondary text-white fw-bold">
    <div class="container-fluid">
      <a class="navbar-brand text-white fs-3 fw-bold" href="index.html">Óra Webshop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fs-6">
          <li class="nav-item"><a class="nav-link text-white" href="index.html">Főoldal</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Rólunk</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Admin</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="kosar.php">🛒 Kosár</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- TARTALOM -->
  <div class="container my-5 flex-grow-1">
    <h1 class="text-center mb-5">Seiko Top 10 termékek</h1>
    
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <!-- 1. Seiko Prospex Turtle -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://example.com/seiko-prospex-turtle.jpg" class="card-img-top" alt="Seiko Prospex Turtle">
          <div class="card-body">
            <h5 class="card-title">1. Seiko Prospex Turtle</h5>
            <p class="card-text">Ikonikus búváróra formával és megbízhatósággal.</p>
            <p class="fw-bold text-success">185 000 Ft</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="input-group" style="width: 120px;">
                <input type="number" class="form-control" value="1" min="1">
              </div>
              <button class="btn btn-primary" onclick="addToCart('seiko-prospex-turtle', this)">Kosárba</button>
            </div>
          </div>
        </div>
      </div>

      <!-- 2. Seiko Presage Cocktail Time -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://example.com/seiko-presage-cocktail.jpg" class="card-img-top" alt="Seiko Presage Cocktail Time">
          <div class="card-body">
            <h5 class="card-title">2. Seiko Presage Cocktail Time</h5>
            <p class="card-text">Kézzel készült számlap, elegancia koktélok ihletésében.</p>
            <p class="fw-bold text-success">165 000 Ft</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="input-group" style="width: 120px;">
                <input type="number" class="form-control" value="1" min="1">
              </div>
              <button class="btn btn-primary" onclick="addToCart('seiko-presage-cocktail', this)">Kosárba</button>
            </div>
          </div>
        </div>
      </div>

      <!-- 3. Seiko 5 Sports -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://example.com/seiko-5-sports.jpg" class="card-img-top" alt="Seiko 5 Sports">
          <div class="card-body">
            <h5 class="card-title">3. Seiko 5 Sports</h5>
            <p class="card-text">Megbízható automata óra modern dizájnnal.</p>
            <p class="fw-bold text-success">95 000 Ft</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="input-group" style="width: 120px;">
                <input type="number" class="form-control" value="1" min="1">
              </div>
              <button class="btn btn-primary" onclick="addToCart('seiko-5-sports', this)">Kosárba</button>
            </div>
          </div>
        </div>
      </div>

      <!-- 4. Seiko Astron GPS Solar -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://example.com/seiko-astron.jpg" class="card-img-top" alt="Seiko Astron GPS Solar">
          <div class="card-body">
            <h5 class="card-title">4. Seiko Astron GPS Solar</h5>
            <p class="card-text">GPS vezérelt időbeállítás, napelemes töltés.</p>
            <p class="fw-bold text-success">520 000 Ft</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="input-group" style="width: 120px;">
                <input type="number" class="form-control" value="1" min="1">
              </div>
              <button class="btn btn-primary" onclick="addToCart('seiko-astron', this)">Kosárba</button>
            </div>
          </div>
        </div>
      </div>

      <!-- 5. Seiko King Turtle -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://example.com/seiko-king-turtle.jpg" class="card-img-top" alt="Seiko King Turtle">
          <div class="card-body">
            <h5 class="card-title">5. Seiko King Turtle</h5>
            <p class="card-text">Kerámia lünetta és zafírkristály, profi búváróra.</p>
            <p class="fw-bold text-success">225 000 Ft</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="input-group" style="width: 120px;">
                <input type="number" class="form-control" value="1" min="1">
              </div>
              <button class="btn btn-primary" onclick="addToCart('seiko-king-turtle', this)">Kosárba</button>
            </div>
          </div>
        </div>
      </div>

      <!-- 6–10. termékek -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://example.com/seiko-sumo.jpg" class="card-img-top" alt="Seiko Sumo">
          <div class="card-body">
            <h5 class="card-title">6. Seiko Sumo</h5>
            <p class="card-text">Masszív búváróra karakteres megjelenéssel.</p>
            <p class="fw-bold text-success">240 000 Ft</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="input-group" style="width: 120px;">
                <input type="number" class="form-control" value="1" min="1">
              </div>
              <button class="btn btn-primary" onclick="addToCart('seiko-sumo', this)">Kosárba</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://example.com/seiko-sarb033.jpg" class="card-img-top" alt="Seiko SARB033">
          <div class="card-body">
            <h5 class="card-title">7. Seiko SARB033</h5>
            <p class="card-text">Minimalista dizájn, automata szerkezet.</p>
            <p class="fw-bold text-success">190 000 Ft</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="input-group" style="width: 120px;">
                <input type="number" class="form-control" value="1" min="1">
              </div>
              <button class="btn btn-primary" onclick="addToCart('seiko-sarb033', this)">Kosárba</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://example.com/seiko-chrono.jpg" class="card-img-top" alt="Seiko Chronograph">
          <div class="card-body">
            <h5 class="card-title">8. Seiko Chronograph</h5>
            <p class="card-text">Pontos stopperfunkció, sportos stílus.</p>
            <p class="fw-bold text-success">89 990 Ft</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="input-group" style="width: 120px;">
                <input type="number" class="form-control" value="1" min="1">
              </div>
              <button class="btn btn-primary" onclick="addToCart('seiko-chronograph', this)">Kosárba</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://example.com/seiko-lukia.jpg" class="card-img-top" alt="Seiko Lukia">
          <div class="card-body">
            <h5 class="card-title">9. Seiko Lukia</h5>
            <p class="card-text">Női órakollekció elegáns megjelenéssel.</p>
            <p class="fw-bold text-success">135 000 Ft</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="input-group" style="width: 120px;">
                <input type="number" class="form-control" value="1" min="1">
              </div>
              <button class="btn btn-primary" onclick="addToCart('seiko-lukia', this)">Kosárba</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="https://example.com/seiko-alpinist.jpg" class="card-img-top" alt="Seiko Alpinist">
          <div class="card-body">
            <h5 class="card-title">10. Seiko Alpinist</h5>
            <p class="card-text">Kalandozóknak tervezve, ikonikus zöld számlappal.</p>
            <p class="fw-bold text-success">210 000 Ft</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="input-group" style="width: 120px;">
                <input type="number" class="form-control" value="1" min="1">
              </div>
              <button class="btn btn-primary" onclick="addToCart('seiko-alpinist', this)">Kosárba</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Toast értesítő konténer (a képernyő jobb alsó sarkában) -->
<div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastContainer">
  <div id="cartToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        Termék hozzáadva a kosárhoz!
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Bezár"></button>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function addToCart(productId, buttonElement) {
  const productCard = buttonElement.closest('.card');
  const productName = productCard.querySelector('.card-title').innerText;
  const productPrice = parseInt(productCard.querySelector('.text-success').innerText.replace(/[^0-9]/g, ''));
  const quantity = parseInt(productCard.querySelector('input[type="number"]').value);
  const productImage = productCard.querySelector('.card-img-top').src;
  const productDesc = productCard.querySelector('.card-text').innerText;

  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  
  const existingItem = cart.find(item => item.id === productId);
  if (existingItem) {
    existingItem.quantity += quantity;
  } else {
    cart.push({
      id: productId,
      name: productName,
      price: productPrice,
      quantity: quantity,
      image: productImage,
      description: productDesc
    });
  }
  
  localStorage.setItem("cart", JSON.stringify(cart));
  
  // Toast üzenet beállítása
  document.querySelector('#cartToast .toast-body').innerText = `${productName} hozzáadva a kosárhoz (mennyiség: ${quantity})`;
  
  // Toast megjelenítése
  var toastElement = document.getElementById('cartToast');
  var toast = new bootstrap.Toast(toastElement);
  toast.show();
}

  </script>
</body>
</html>