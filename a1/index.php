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



  <main>
    <div class="banner-image">
      <div class="scroll-down-arrow-wrapper">
        <svg class="scroll-down-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048" className={classes.svg} focusable="false">
          <path d="M1939 467l90 90-1005 1005L19 557l90-90 915 915 915-915z" />
        </svg>
      </div>
    </div>
    <div class="content-block">
      <h1 style="padding-bottom: 16px;">
        Our Products
      </h1>

      <div class="product-gallery">
        <div class="gallery">
          <div class="gallery-img-1"></div>
          <h2>Signature Coffee</h2>
          <a>See More</a>
        </div>
        <div class="gallery">
          <div class="gallery-img-2"></div>
          <h2>Grandma's Best Brownies</h2>
          <a>See More</a>
        </div>
        <div class="gallery">
          <div class="gallery-img-3"></div>
          <h2>A Very Warm Chocolate </h2>
          <a>See More</a>
        </div>
      </div>
    </div>
    <div class="banner-image-smaller">
    </div>
    <div class="content-block">
      <h1 style="padding-bottom: 16px;">
        Our Assurance to Quality
      </h1>

      <div class="product-gallery">
        <div class="gallery">
          <h2>The Finest Coffee Beans</h2>
          <p>Here at Kaffee express, we only use the highest quality beans to achieve that high quality taste you come to expect</p>
        </div>
        <div class="gallery">
          <h2>The Most Experienced Baristas</h2>
          <p>Kaffee Express hires only the the most experienced in the industry. Nowhere else in the world will you fine the most elite baristas in the whole world.</p>
        </div>
        <div class="gallery">
          <h2>The Best Atmosphere in Town</h2>
          <p>If you are looking for the best place in all of town to just chill out and hang with friends, then Kaffee express is the place to be. We take pride in having a very comfortable environment that everyone can feel safe and communal in.</p>
        </div>
      <div class="gallery">
          <h2>Something</h2>
          <p>content</p>
        </div>
        <div class="gallery">
          <h2>Something</h2>
          <p>content</p>
        </div>
        <div class="gallery">
          <h2>Something</h2>
          <p>content</p>
        </div>
      </div>
    </div>
    <div class="banner-image-smaller-2">
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