<?php

require("tools.php");

function checkProduct($id, $type)
{
  // Re-read the product array from the latest CSV
  $products = readProducts();

  // Loop through the array and find a matching ID
  foreach ($products as $prod) {
    if ($prod[1] == $id) {
      if ($prod[5] == $type or $prod[6] == $type or $prod[7] == $type) {
        return true;
      } else {
        return false;
      }
    }
  }
  return false;
}
