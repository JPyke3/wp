<?php
session_start();

$users = [
  'Alice' => 'passwordA',
  'Bob' => 'passwordB',
  'Carol' => 'passwordC',
];

$endMessage = "";

function logIO()
{
  global $users;
  global $endMessage;
  if (isset($_SESSION['user'])) {
    session_unset();
  } else {
    $username = $_POST["username"];
    $password = $_POST["password"];
    foreach ($users as $key => $user) {
      $endMessage .= "user check " . $key;
      if ($key == $username && $user == $password) {
        // The user matches both the key and the password in the array
        $_SESSION["user"] = $key;
      } else {
        // There was no match
        // TODO: Insert error here
      }
    }
  }
}

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

function topModule($title)
{
  /* 
  To Do: print the top of the page with a page title
*/
}

function endModule()
{
  global $endMessage;
  return $endMessage;
}
