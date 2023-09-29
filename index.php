 <?php 
 $page = "home";

 require 'inc/header.php';
 ?>


    <section class="hero container">
      <div class="hero-img">
        <img src="images/hero1.jpg" alt="" />
      </div>
      <div class="hero-text">
        <p class="hero-stats">
          <i class="fa-solid fa-chart-line"></i>
          <span>85% would make this again</span>
        </p>
        <h1 class="hero-title">Welcome to Your Cooking Website</h1>
        <p class="hero-info">
          This is an informative section about your cooking platform.
        </p>
        <a href="" class="hero-btn"
          ><i
            class="fa-solid fa-circle-chevron-right"
            
          ></i
        ></a>
      </div>
    </section>

    <!-- Recommended recipes section -->

    <section class="recipes container" id="recommended-recipes">
      <h2>Recommended Recipes</h2>
      <div class="wrapper">
        <div class="recipe">
          <div class="recipe-img">
            <img src="images/recipe1.jpg" alt="Recipe 1" />
          </div>
          <h3>Spinach and cheese Pasta</h3>
          <p>Author: Joe Biden</p>
          <div class="recipe-stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
          </div>
        </div>

        <div class="recipe">
          <div class="recipe-img">
            <img src="images/recipe1.jpg" alt="Recipe 1" />
          </div>
          <h3>Spinach and cheese Pasta</h3>
          <p>Author: Joe Biden</p>
          <div class="recipe-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>

        <div class="recipe">
          <div class="recipe-img">
            <img src="images/recipe1.jpg" alt="Recipe 1" />
          </div>
          <h3>Spinach and cheese Pasta</h3>
          <p>Author: Joe Biden</p>
          <div class="recipe-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>
      </div>
      <div class="recipe-btn">
        <a href="recipes.html">View All Recipes</a>
      </div>
    </section>

    <!-- End recommended recipes -->

    <!-- Start popular articles -->
    <section class="articles container">
      <h2>Popular Articles</h2>
      <div class="wrapper">
        <div class="article">
          <div class="article-img">
            <img src="images/article1.jpg" alt="Article 1" />
          </div>
          <h3>
            “One cannot think well, love well, sleep well, if one has not dined
            well.”
          </h3>
          <p>Author: Joe Biden</p>
          <div class="article-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>

        <div class="article">
          <div class="article-img">
            <img src="images/article1.jpg" alt="article 1" />
          </div>
          <h3>
            “One cannot think well, love well, sleep well, if one has not dined
            well.”
          </h3>
          <p>Author: Joe Biden</p>
          <div class="article-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>

        <div class="article">
          <div class="article-img">
            <img src="images/article1.jpg" alt="article 1" />
          </div>
          <h3>
            “One cannot think well, love well, sleep well, if one has not dined
            well.”
          </h3>
          <p>Author: Joe Biden</p>
          <div class="article-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>
      </div>
      <div class="article-btn">
        <a href="articles.html">View All Articles</a>
      </div>
    </section>

    <!-- End articles -->

    <!-- Start categories -->
    <section class="categories container">
      <h2 class="categories-title">Categories</h2>
      <div class="wrapper">
        <div class="category">
          <div class="category-img">
            <img src="images/category1.png" alt="Category 1" />
          </div>
          <p class="category-title">Pasta</p>
        </div>
        <div class="category">
          <div class="category-img">
            <img src="images/category1.png" alt="Category 1" />
          </div>
          <p class="category-title">Pasta</p>
        </div>
        <div class="category">
          <div class="category-img">
            <img src="images/category1.png" alt="Category 1" />
          </div>
          <p class="category-title">Pasta</p>
        </div>
        <div class="category">
          <div class="category-img">
            <img src="images/category1.png" alt="Category 1" />
          </div>
          <p class="category-title">Pasta</p>
        </div>
        <div class="category">
          <div class="category-img">
            <img src="images/category1.png" alt="Category 1" />
          </div>
          <p class="category-title">Pasta</p>
        </div>
        <div class="category">
          <div class="category-img">
            <img src="images/category1.png" alt="Category 1" />
          </div>
          <p class="category-title">Pasta</p>
        </div>
      </div>
      <div class="category-btn">
        <a href="categories.html">View All Categories</a>
      </div>
    </section>
    <!-- End categories -->

    <!-- Start newsletter -->

    <section class="newsletter">
      <div class="container">
        <h2 class="newsletter-title">Deliciousness to your inbox</h2>
        <p class="newsletter-info">
          Enjoy weekly hand picked recipes and recommendations
        </p>
        <div class="newsletter-form">
          <input type="text" class="newsletter-input" />
          <input class="newsletter-btn" type="submit" value="JOIN" />
        </div>

        <p class="newsletter-terms">
          By joining our newsletter you agree to our
          <a href="">Terms and Conditions</a>
        </p>
      </div>
    </section>

    <!-- End newsletter -->

    <!-- Latest recipes section -->

    <section class="recipes container" id="latest-recipes">
      <h2>Latest Recipes</h2>
      <div class="wrapper">
        <div class="recipe">
          <div class="recipe-img">
            <img src="images/recipe1.jpg" alt="Recipe 1" />
          </div>
          <h3>Spinach and cheese Pasta</h3>
          <p>Author: Joe Biden</p>
          <div class="recipe-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>

        <div class="recipe">
          <div class="recipe-img">
            <img src="images/recipe1.jpg" alt="Recipe 1" />
          </div>
          <h3>Spinach and cheese Pasta</h3>
          <p>Author: Joe Biden</p>
          <div class="recipe-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>

        <div class="recipe">
          <div class="recipe-img">
            <img src="images/recipe1.jpg" alt="Recipe 1" />
          </div>
          <h3>Spinach and cheese Pasta</h3>
          <p>Author: Joe Biden</p>
          <div class="recipe-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>

        <div class="recipe">
          <div class="recipe-img">
            <img src="images/recipe1.jpg" alt="Recipe 1" />
          </div>
          <h3>Spinach and cheese Pasta</h3>
          <p>Author: Joe Biden</p>
          <div class="recipe-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>

        <div class="recipe">
          <div class="recipe-img">
            <img src="images/recipe1.jpg" alt="Recipe 1" />
          </div>
          <h3>Spinach and cheese Pasta</h3>
          <p>Author: Joe Biden</p>
          <div class="recipe-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>

        <div class="recipe">
          <div class="recipe-img">
            <img src="images/recipe1.jpg" alt="Recipe 1" />
          </div>
          <h3>Spinach and cheese Pasta</h3>
          <p>Author: Joe Biden</p>
          <div class="recipe-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>

        <div class="recipe">
          <div class="recipe-img">
            <img src="images/recipe1.jpg" alt="Recipe 1" />
          </div>
          <h3>Spinach and cheese Pasta</h3>
          <p>Author: Joe Biden</p>
          <div class="recipe-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>

        <div class="recipe">
          <div class="recipe-img">
            <img src="images/recipe1.jpg" alt="Recipe 1" />
          </div>
          <h3>Spinach and cheese Pasta</h3>
          <p>Author: Joe Biden</p>
          <div class="recipe-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>
        <div class="recipe">
          <div class="recipe-img">
            <img src="images/recipe1.jpg" alt="Recipe 1" />
          </div>
          <h3>Spinach and cheese Pasta</h3>
          <p>Author: Joe Biden</p>
          <div class="recipe-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        </div>
      </div>
      <div class="recipe-btn">
        <a href="recipes.html">View All Recipes</a>
      </div>
    </section>

    <!-- End latest recipes -->

<?php 

require "inc/footer.php"

?>
