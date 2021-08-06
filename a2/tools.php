<?php

// Put your PHP functions and modules here

// Helper function for reading the products and exporting it to the session
  function readProducts() {
    // Helper function for splitting the CSV via tabs instead of commas
    function str_callback($n)
    {
        return str_getcsv($n, "\t");
    }

    // Read prices.txt and map it to a 2D Array
    $file = "./prices.txt";
    $csv = file_get_contents($file);
    $products = array_map("str_callback", explode(PHP_EOL, $csv));

    // Remove the title from the product array
    array_shift($products);
    
    return $products;
  }