<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="Brian Kinyua">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>RecipeTube</title>
  </head>
  <body>
    <div>
      <nav>
        <a class="page-title" href="index.php">RecipeTube</a>
        <ul>
          <li><a href="index.php">Home</a></li>
          
          <?php 
            if (isset($_SESSION["userid"])) {
              echo "<li><a href='discover.php'>About Us</a></li>";
              echo "<li><a href='blog.php'>Find Recipe</a></li>";
              echo "<li><a href='./includes/logout.inc.php'>Log Out</a></li>";
            } else {
              echo "<li><a href='signup.php'>Sign Up</a></li>" ;
              echo "<li><a href='login.php'>Login In</a></li>" ;
            }
            ?>
            
          
          
        </ul>
      </nav>
    </div>