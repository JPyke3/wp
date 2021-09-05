<?php
session_start();

// Create the user array
$users = [
  'Alice' => 'passwordA',
  'Bob' => 'passwordB',
  'Carol' => 'passwordC',
];

// Create a helper variable for the messages shown at the end of the page
$endMessage = "";

// Function for handling Logging in and out
function logIO()
{
  // Bring the two global vars into the function
  global $users;
  global $endMessage;
  if (isset($_SESSION['user'])) {
    // Unset the session if the user wants to log out
    session_unset();
  } else {
    $username = $_POST["username"];
    $password = $_POST["password"];
    foreach ($users as $key => $user) {
      // Add to the end of the page message for each user checked
      $endMessage .= "user check " . $key;
      if ($key == $username && $user == $password) {
        // The user matches both the key and the password in the array
        $_SESSION["user"] = $key;
      }
    }
  }
}

// Function for helping create the contect for the navigation bar
// This function is mainly used to fetch the currently logged in user
function navContent()
{
  if (isset($_SESSION['user'])) {
    global $endMessage;
    $endMessage .= "user check session " . $_SESSION['user'];
    return $_SESSION['user'];
  } else {
    return "";
  }
}

// Function for handling the text that gets rendered at the end of the screen
function endModule()
{
  global $endMessage;
  return $endMessage;
}
