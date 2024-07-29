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
  <!-- dk-style.css NOT connected -->
</head>

<body>

<!-- .header-main -->
  <header class="header-main">
    <nav>
      <div class="wrapper">
        <a href="index.php">
          <img src="pix/ehd-logo--blogs.svg" alt="Blogs logo" class="logo">
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="discover.php">About Us</a></li>
          <li><a href="blog.php">Find Blogs</a></li>
          <li><a href="signup.php">Sign up</a></li>
          <li><a href="login.php">Log in</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- // .header-main -->

  <!-- .wrapper -->
  <div class="wrapper">

    <section class="index-intro">
      <h1>This is an Introduction</h1>
      <p>Here is an important paragraph that explains the purpose of the website.</p>
    </section>

    <section class="index-categories">
      <h2>Some Basic Categories</h2>

      <!-- .index-categories-list -->
      <div class="index-categories-list">

        <div class="cat-box">
          <h3>Fun Stuff</h3>
        </div>
        <div class="cat-box">
          <h3>Serious Stuff</h3>
        </div>
        <div class="cat-box">
          <h3>Exciting Stuff</h3>
        </div>
        <div class="cat-box">
          <h3>Boring Stuff</h3>
        </div>


      </div>
      <!-- // .index-categories-list -->

    </section>

  </div>
  <!-- // .wrapper -->

</body>

</html>

<script src="js/script.js"></script>