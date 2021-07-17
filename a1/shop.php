<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2</title>

  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
  <script src='../wireframe.js'></script>
  <script src='./index.js'></script>
</head>

<body>

  <header>
    <div class="header">
      <h1 class="site-title">Kaffee Express</h1>
    </div>
  </header>

  <nav>
    <div class="navigation">
      <div class="navigation-icon">
        <label class="navigation-label">
          <input type="button" hidden="true" onclick="toggleHamburgerMenu()">
        </label>
      </div>
    </div>
    <hamburger style="display: none;">
      <div class="hamburger-wrapper">
        <div class="menu">
          <div class="navigation-icon">
            <label class="navigation-close-label">
              <input type="button" hidden="true" onclick="toggleHamburgerMenu()">
            </label>
          </div>
          <div class="menu-content">
            <h1>Navigation</h1>
            <div class="nav-buttons">
            <a class="nav-btn" href="./index.php" >Home</a>
            <a class="nav-btn" href="./shop.php" >Products</a>
            <a class="nav-btn" href="./about.php" >About Us</a>
            </div>
          </div>
        </div>
        <div class="blankspace"></div>
      </div>
    </hamburger>
  </nav>



  <main style="padding-top: 80px;">
      <div class="shop-gallery">
        <div class="shop-item">
        <div class="shop-img"></div>
            <h1>Product 1</h1>
            <p>Description</p>
        </div>
        <div class="shop-item">
            <div class="shop-img"></div>
            <h1>Product 2</h1>
            <p>Description</p>
        </div>

        <div class="shop-item">
            <div class="shop-img"></div>
            <h1>Product 3</h1>
            <p>Description</p>
            </div>
        <div class="shop-item">
            <div class="shop-img"></div>
            <h1>Product 4</h1>
            <p>Description</p>
        </div>
        <div class="shop-item">
            <div class="shop-img"></div>
            <h1>Product 5</h1>
            <p>Description</p>
        </div>

        <div class="shop-item">
            <div class="shop-img"></div>
            <h1>Product 6</h1>
            <p>Description</p>
        </div>
      </div>
  </main>

  <footer>
  <div class="content-block">
      <h1 style="padding-bottom: 16px;">
        Find us on Social Media!
      </h1>

      
    </div>
    <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Jacob Pyke, s3755145. Last modified <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>

</body>

</html>