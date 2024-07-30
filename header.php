<?php
include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login System | Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- <link rel="stylesheet" href="css/dk-style.css"> -->
</head>

<body>

  <?php
  $URL_file = basename($_SERVER['PHP_SELF']);


  ?>

  <!-- .header-main -->
  <header class="header-main">
    <nav>
      <div class="wrapper">
        <a href="index.php">
          <img src="pix/ehd-logo--blogs.svg" alt="Blogs logo" class="logo">
        </a>
        <ul>
          <?php
          // HOMEPAGE
          if (str_contains($URL_file, "index.php")) {
            echo "<li class='nav-item home active'><a href='index.php'>Home</a></li>";
          } else {
            echo "<li class='nav-item home'><a href='index.php'>Home</a></li>";
          }
          // ABOUT
          if (str_contains($URL_file, "discover.php")) {
            echo "<li class='nav-item about active'><a href='discover.php'>About Us</a></li>";
          } else {
            echo "<li class='nav-item about'><a href='discover.php'>About Us</a></li>";
          }
          // FIND BLOGS
          if (str_contains($URL_file, "blog.php")) {
            echo "<li class='nav-item blog active'><a href='blog.php'>Find Blogs</a></li>";
          } else {
            echo "<li class='nav-item blog'><a href='blog.php'>Find Blogs</a></li>";
          }
          // SIGNUP
          if (str_contains($URL_file, "signup.php")) {
            echo "<li class='nav-item signup active'><a href='signup.php'>Sign Up</a></li>";
          } else {
            echo "<li class='nav-item signup'><a href='signup.php'>Sign Up</a></li>";
          }
          // LOGIN
          if (str_contains($URL_file, "login.php")) {
            echo "<li class='nav-item login active'><a href='login.php'>Log in</a></li>";
          } else {
            echo "<li class='nav-item login'><a href='login.php'>Log in</a></li>";
          }

          ?>
        </ul>
      </div>
    </nav>
  </header>
  <!-- // .header-main -->

  <!-- .wrapper -->
  <main class="wrapper">