<?php

session_start();

function addToCSV($orderDate, $name, $email, $telephone, $product, $variant, $quantity, $id)
{
  fputcsv(fopen("./orders.txt", "a"), array($orderDate, $name, $email, $telephone, $product, $variant, $quantity, $id));
}

function findOrderWithID($id)
{

  function str_callback($n)
  {
      return str_getcsv($n, ",");
  }

  // Read prices.txt and map it to a 2D Array
  $file = "./orders.txt";
  $csv = file_get_contents($file);
  $products = array_map("str_callback", explode(PHP_EOL, $csv));

  // Remove the title from the product array
  array_shift($products);

  foreach ($products as $product) {
    if ($product[7] == $id) {
      return $product;
    }
  }
  return null;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["email"]) && !empty($_POST["tel"]) && !empty($_POST["ccn"]) && !empty($_POST["id"])) {
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $telephone = $_POST["tel"];
    $creditcard = $_POST["ccn"];
    $orderid = $_POST["id"];

    if (findOrderWithID($orderid) == null) {
      
      foreach ($_SESSION["cart"] as $item) {
        addToCSV(date("d/m/Y") ,$firstname . " " . $lastname, $email, $telephone, $item[3][2], $item[1], $item[2], $orderid);
      }
    }
  } else {
    header("Location: checkout.php");
  }
} else {
  header("Location: checkout.php");
}

/*

This page must be formatted differently to other website pages. It should:
  1) Be printer friendly
  2) Look like company branded letterhead
  3) Look as though it fits on an A4 page
  4) Use a modest amount of toner / ink when printing

*/

?>

<html>

<head>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Roboto&display=swap" rel="stylesheet">
  <link id='stylecss' type="text/css" rel="stylesheet" href="receipt-style.css?t=<?= filemtime("receipt-style.css"); ?>">

</head>

<body>
  <div class="letterhead">
    <h1>Kaffee Express</h1>
    <div class="address">
      <p>1 Infinite Loop</p>
      <p>Cupertino</p>
      <p>CA 95014</p>
      <p>USA</p>
    </div>
  </div>
  <hr style="width: 100%" />
  <div class="content">
    <b>BILL TO</b>
    <p><?php echo $firstname ?> <?php echo $lastname ?></p>
    <p><?php echo $email ?></p>
    <p><?php echo $telephone ?></p>
    <table class="item-table">
      <tr>
        <th>Item</th>
        <th>Variant</th>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
      <?php
      $total = 0;
      foreach ($_SESSION["cart"] as $item) {
        $total = $total + ((int)$item[3][4] * $item[2]);
      ?>
        <tr>
          <td><?php echo $item[3][2] ?></td>
          <td><?php echo $item[1] ?></td>
          <td><?php echo $item[2] ?></td>
          <td><?php echo number_format((float)$item[3][4] * $item[2] / 100, 2); ?></td>
        </tr>
      <?php } ?>
    </table>
    <table class="total-table">
      <tr>
        <td></td>
        <td></td>
        <td>Subtotal</td>
        <th><b><?php echo number_format((float)$total / 100, 2); ?></b></th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>Tax Rate</td>
        <th><b>5.00%</b></th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>Sales Tax</td>
        <th><b><?php echo number_format((float)$total / 100 * 0.05, 2); ?></b></th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>Other</td>
        <th>0</th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>Total</td>
        <th><b><?php echo number_format((float)$total / 100 + (float)$total / 100 * 0.05, 2); ?></b></th>
      </tr>
    </table>
  </div>
</body>

</html>

<?php $_SESSION["cart"] = array(); ?>