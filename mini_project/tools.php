<?php 
  session_start();

  $users = [
    'Alice' => 'passwordA',
    'Bob' => 'passwordB',
    'Carol' => 'passwordC',
  ];
  
  function logIO() {
    global $users;
    if (isset($_SESSION['user'])) {
/* 
  To Do: log them out 
*/
    } else {
/* 
  To Do:
  1) check for a name and password in POST
  2) if they exist, check for a match in the user / password array
  3) if there is a match log them in
*/
    }
  }

function navContent() {
  if(isset($_SESSION['user'])) {
    return $_SESSION['user'];
  } else {
    return "";
  }
}

  function topModule($title) {
/* 
  To Do: print the top of the page with a page title
*/
  }

  function endModule() {
/* 
  To Do: print the end of the page
*/
  }
?>
