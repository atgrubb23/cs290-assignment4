<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(isset($_POST['username']) && trim($_POST['username']) === '') {
  if(!isset($_SESSION['loginSuccessful'])) {
    exit('<p>A username must be entered. Click ' . '<a href=http://web.engr.oregonstate.edu/~grubba/cs290/assignment4/src/login.php> here</a>' . ' to return.');
  }
}

if(!isset($_POST['username'])) {
  if(!isset($_SESSION['loginSuccessful'])) {
    header('Location: http://web.engr.oregonstate.edu/~grubba/cs290/assignment4/src/login.php');
  }
}

if(isset($_POST['username']) && !(trim($_POST['username'] === ''))) {
  //immediate header redirect to the same page. This will make it so page refreshes will not require additional POST requests
  header('Location: http://web.engr.oregonstate.edu/~grubba/cs290/assignment4/src/content1.php');
  $_SESSION['loginSuccessful'] = true;
  $_SESSION['username'] = $_POST['username'];
}

if(isset($_SESSION['loginSuccessful'])) {
  if(!isset($_SESSION['visits'])) {
    //initialize visits to -1 because we are reloading the page as soon as a successful login occurs.
    $_SESSION['visits'] = -1;
  }
  $_SESSION['visits']++;
  echo "<p>Hello " . $_SESSION['username'] . "! You have visited this page " . $_SESSION['visits'] . " times!";
  echo "<p>Click <a href='http://web.engr.oregonstate.edu/~grubba/cs290/assignment4/src/login.php?status=loggedOut'>here</a> to logout.";
  echo "<p><a href='http://web.engr.oregonstate.edu/~grubba/cs290/assignment4/src/content2.php'>Content 2</a>";
}
?>