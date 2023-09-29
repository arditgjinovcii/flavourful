<?php 
require "inc/functions.php";
?>

<!-- Header -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>flavourful | 600+ recipes online</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="mediaqueries.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/logo-purple.svg" />
    <script
      src="https://kit.fontawesome.com/4c051e6f7d.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header class="header container">
      <div class="logo">
        <img src="images/logo.svg" alt="Logo" />
      </div>
      <nav class="nav">
        <ul class="nav-list">
          <li class="nav-list-item"><a class="<?php  if($page == 'home') {echo 'active-link';}?>" href="index.php">Home</a></li>
          <li class="nav-list-item"><a class="<?php  if($page == 'about') {echo 'active-link';}?>" href="about.php">About</a></li>
          <li class="nav-list-item"><a class="<?php  if($page == 'recipes') {echo 'active-link';}?>" href="recipes.php">Recipes</a></li>
          <li class="nav-list-item"><a class="<?php  if($page == 'articles') {echo 'active-link';}?>" href="articles.php">Articles</a></li>
          <li class="nav-list-item"><a class="<?php  if($page == 'categories') {echo 'active-link';}?>" href="categories.php">Categories</a></li>
          <li class="nav-list-item"><a id="contact-link" href="#">Contact</a></li>
        </ul>
      </nav>


      <!-- Contact popup -->

      <div id="contact-popup" class="popup">
        <div class="popup-content">
          <span class="close-button" id="close-contact-popup">&times;</span>
          <div class="contact">
            <h2 class="contact-title">Contact us</h2>
            <div class="contact-form">
              <form action="" method="post">
                <input type="text" name="contact-name" placeholder="NAME">
                <input type="email" name="contact-email" placeholder="EMAIL">
                <textarea name="contact-message" placeholder="MESSAGE"></textarea>
              </form>
            </div>
           </div>
           <div class="contact-footer">
            <p class="contact-info">Contact info: 045444444</p>
            <div class="contact-buttons">
              <a href="" class="contact-buttons close">Cancel</a>
              <a href="" class="contact-buttons send">Send</a>
            </div>

           </div>
        </div>
    </div>
      <!-- End contact popoup -->
      
      <div class="right-buttons">
        
        <div class="search-container">
          <button id="search-button" onclick="toggleSearch()"><i class="fa-solid fa-magnifying-glass"></i></button>
          <input type="text" id="search-input" placeholder="search recipes...">
      </div>
      

        <div class="sign">
          <button class="btn btn-login">Log In</button>
          <button class="btn btn-signup">Sign Up</button>
        </div>
      </div>
      <button class="hamburger">
        <div class="bar"></div>
      </button>

      <nav class="mobile-nav">
        <ul class="nav-list">
          <li class="nav-list-item"><a class="<?php  if($page == 'home') {echo 'active-link';}?>" href="index.php">Home</a></li>
          <li class="nav-list-item"><a class="<?php  if($page == 'about') {echo 'active-link';}?>" href="about.php">About</a></li>
          <li class="nav-list-item"><a class="<?php  if($page == 'recipes') {echo 'active-link';}?>" href="recipes.php">Recipes</a></li>
          <li class="nav-list-item"><a class="<?php  if($page == 'articles') {echo 'active-link';}?>" href="articles.php">Articles</a></li>
          <li class="nav-list-item"><a class="<?php  if($page == 'categories') {echo 'active-link';}?>" href="categories.php">Categories</a></li>
          <li class="nav-list-item"><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>