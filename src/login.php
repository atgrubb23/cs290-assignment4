<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'/>
    <title>Assignment4 Login Page</title>
    <style>
      fieldset {
        display: inline-block;
      }
    </style>
  </head>
  
  <body>
    <?php
      if(isset($_GET['status']) && $_GET['status'] === 'loggedOut') {
        $_SESSION = array();
        session_destroy();
        echo '<p> Logged out.';
      }
      echo "<form action='http://web.engr.oregonstate.edu/~grubba/cs290/assignment4/src/content1.php' method='POST'>
          <fieldset>
          <legend>Username</legend>
          <input type='text' name='username'/>
          <input type='submit' Submit!/>
          </fieldset>
          </form>";
    ?>
  </body>
</html>


