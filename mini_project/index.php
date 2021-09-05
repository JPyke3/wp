<?php
include_once("tools.php");

if (isset($_POST["username"]) && isset($_POST["password"])) {
  logIO();
}

if (isset($_POST["logout"])) {
  logIO();
}

$shownIfUser;
$buttonText;
if (!isset($_SESSION['user'])) {
  $shownIfUser = "display: none;";
  $hiddenIfUser = "";
} else {
  $shownIfUser = "";
  $hiddenIfUser = "display: none;";
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
      <div style="<?php echo $shownIfUser ?>">Logged in as <?php echo navContent() ?></div>
      <ul>
        <li><a href="./">Home</a></li>
        <li><a href="./members.php">Members</a></li>
        <li><button style="<?php echo $hiddenIfUser ?>" onclick="toggleLogin()">Login</button></li>
        <form style="<?php echo $shownIfUser ?>; display: inline;" action="" method="post">
          <input style="<?php echo $shownIfUser ?>" type="submit" name="logout" value="Logout" />
        </form>
      </ul>
      <div id="login" style="display: none;">
        <form method="POST">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" require />
          <label for="username">Password</label>
          <input type="password" id="password" name="password" require />
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
        <textarea id=address form="order"></textarea>
        <label style="display: inline;">Remember Me
          <input style="display: unset !important;" type="checkbox" id="rememberme" name="rememberme" onclick="writeFieldsToStorage()" />
        </label>
        <input type="submit" disabled />
      </p>
      <p>

      </p>
      <p>

      </p>


    </form>
    <script>
      fetchFieldsFromStorage()
    </script>
  </main>

  <footer>
    Footer Content
  </footer>

  <?php echo endModule(); ?>

</body>

</html>