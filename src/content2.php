<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  session_start();
  
  if(isset($_SESSION['loginSuccessful'])) {
    echo "<p>Click <a href='http://web.engr.oregonstate.edu/~grubba/cs290/assignment4/src/content1.php'>here</a> to navigate back to Content 1.";
  }
  
  else {
    header('Location: http://web.engr.oregonstate.edu/~grubba/cs290/assignment4/src/login.php');
  }
?>