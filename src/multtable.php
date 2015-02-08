<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'/>
    <title>Multiplication Table</title>
    <style>
      table {
        border: 1px solid black;
        padding: 4px;
      }
      table td {
        padding: 10px;
        border: 1px solid black;
      }
      table th {
        padding: 10px;
        border: 1px solid black;
        background: lightblue;
        font-weight: normal;
      }
    </style>
  </head>
  
  <body>
    <?php
      $failedIntegerParams = array();
      $failedMinMaxParams = array();
      $failedParamsExist = array();
      
      
      function isInt($string) {
        if(!is_numeric($string) || strpbrk($string, '.')) {
          return false;
        }
        
        else {
        return true;
        }
      }

      if(isset($_GET['min-multiplicand'])) {
        if(!isInt($_GET['min-multiplicand'])){
          $failedIntegerParams[] = '<p>The minimum multiplicand must be an integer.';
        }
        else {
          $minMultiplicand = (int)$_GET['min-multiplicand'];
        }
      }
      else {
        $failedParamsExist[] = '<p>Missing parameter min multiplicand.';
      }
      
      if(isset($_GET['max-multiplicand'])) {
        if(!isInt($_GET['max-multiplicand'])){
          $failedIntegerParams[] = '<p>The maximum multiplicand must be an integer.';
        }
        else {
          $maxMultiplicand = (int)$_GET['max-multiplicand'];
        }
      }
      else {
        $failedParamsExist[] = '<p>Missing parameter max multiplicand.';
      }
      
      if(isset($_GET['min-multiplier'])) {
        if(!isInt($_GET['min-multiplier'])){
          $failedIntegerParams[] = '<p>The minimum multiplier must be an integer.';
        }
        else {
          $minMultiplier = (int)$_GET['min-multiplier'];
        }
      }
      else {
        $failedParamsExist[] = '<p>Missing parameter min multiplier.';
      }
      
      if(isset($_GET['max-multiplier'])) {
        if(!isInt($_GET['max-multiplier'])){
          $failedIntegerParams[] = '<p>The maximum multiplier must be an integer.';
        }
        else {
          $maxMultiplier = (int)$_GET['max-multiplier'];
        }
      }
      else {
        $failedParamsExist[] = '<p>Missing parameter max multiplier.';
      }
      
      if(isset($minMultiplicand) && isset($maxMultiplicand)) { 
        if($minMultiplicand > $maxMultiplicand) {
          $failedMinMaxParams[] = '<p>Minimum multiplicand larger than maximum.';
        }
      }
      
      if(isset($minMultiplier) && isset($maxMultiplier)) {
        if($minMultiplier > $maxMultiplier) {
          $failedMinMaxParams[] = '<p>Minimum multiplier larger than maximum.';
        }
      }
      
      //Print out all params that failed validation for respective reasons and exit script execution
      if(!empty($failedIntegerParams) || !empty($failedMinMaxParams) || !empty($failedParamsExist)) {
        if(!empty($failedParamsExist)) {
          foreach($failedParamsExist as $value) {
            echo "<p>$value";
          }
        }
        
        if(!empty($failedIntegerParams)) {
          foreach($failedIntegerParams as $value) {
            echo "<p>$value";
          }
        }
        
        if(!empty($failedMinMaxParams)) {
          foreach($failedMinMaxParams as $value) {
            echo "<p>$value";
          }
        }
        
        exit();
      }
      
      $tableHeight = ($maxMultiplicand - $minMultiplicand + 2);
      $tableWidth = ($maxMultiplier - $minMultiplier + 2);
      
      echo '<table>';
      for($i = 0; $i < $tableHeight; $i++) {
          echo '<tr> ';

        for($j = 0; $j < $tableWidth; $j++) {
          if($i == 0 && $j == 0) {
            echo "<th>";
          }
          
          elseif($i == 0 && $j > 0) {
            echo "<th>$j";
          }
          
          elseif($i > 0 && $j == 0) {
            echo "<th>$i";
          }
          
          else {
          $currentCell = $j * $i;
          echo "<td>$currentCell";
          }
        }
      }
      echo '</table>';
    ?>
  </body>
</html>