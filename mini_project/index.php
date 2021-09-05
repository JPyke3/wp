<?php
include_once("tools.php");

$displayUserInfo;
$buttonText;
if (!isset($_SESSION['user'])) {
  $displayUserInfo = "display: none;";
  $buttonText = "Login";
} else {
  $displayUserInfo = "";
  $buttonText = "Logout";
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>OrbicoBiz - Welcome!</title>

  <link type="text/css" rel="stylesheet" href="wireframe.css">
  <link type="text/css" rel="stylesheet" href="style.css">

  <script src='script.js'></script>

</head>

<body>
  <top-header>
    <header>
      <!-- Image sourced and adapted from www.rmit.edu.au for educational purposes only -->
      <img src='orbicobiz-logo.png' alt='Orbicobiz Logo' height="100px" />OrbicoBiz
    </header>

    <nav>
      <?php

      ?>
      <div style="<?php echo $displayUserInfo ?>">Logged in as <?php echo navContent() ?></div>
      <ul>
        <li><a href="./">Home</a></li>
        <li><a href="./members.php">Members</a></li>
        <li><button onclick="toggleLogin()"><?php echo $buttonText ?></button></li>
      </ul>
      <div id="login" style="display: none;">
        <form method="POST">
          <label for="username">Username</label>
          <input type="text" require />
          <label for="username">Password</label>
          <input type="password" require />
          <input type="submit" />
        </form>
      </div>
    </nav>
  </top-header>



  <main>
    <h1>Home Page</h1>
    <h2>Order Form</h2>
    <form id="order">

      <p>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required />
      </p>
      <p><label for="email">Email</label>
        <input type="email" id="email" name="email" required />
      </p>
      <p><label for="mobile">Mobile</label>
        <input type="tel" id="mobile" name="mobile" required />
      </p>
      <p><label>Address</label>
        <textarea form="order"></textarea>
        <label style="display: inline;">Remember Me
          <input style="display: unset !important;" type="checkbox" id="rememberme" name="rememberme" />
        </label>
        <input type="submit" disabled />
      </p>
      <p>

      </p>
      <p>

      </p>


    </form>
  </main>

  <footer>
    Footer Content
  </footer>

</body>

</html>