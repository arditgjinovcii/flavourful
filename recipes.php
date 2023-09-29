<?php 
$page = "recipes";

require "inc/header.php"



?>
    <!-- Start recipes -->
    <div class="recipes container">
    <h2 class="recipes-page-title">All Recipes</h2>

    <div class="hr"></div>

     <section class="recipes container" id="latest-recipes">
       <div class="wrapper">
      <?php 
      $i = 0;
        $recipes = getRecipes();

        while($recipe = mysqli_fetch_assoc($recipes)) {
          $recipe_name = $recipe['recipe_name'];
          $image = $recipe['image_url'];
          $prep_time = $recipe['prep_time_minutes'];
          $total_time = $recipe['total_time_minutes'];
          $servings = $recipe['servings'];
          $created_at = $recipe['created_at'];

          echo "<div class='recipe'>";
            echo "<div class='recipe-img'>";
              echo "<img src=$image alt=$recipe_name>";
            echo "</div>";
            echo "<h3>$recipe_name</h3>";
            echo "<p> Author: Joe biden </p>";
              echo "<div class='recipe-stars'>";
                echo "<i class='fa-solid fa-star'></i>";
                echo "<i class='fa-solid fa-star'></i>";
                echo "<i class='fa-solid fa-star'></i>";
                echo "<i class='fa-solid fa-star'></i>";
                echo "<i class='fa-regular fa-star'></i>";
              echo "</div>";
          echo "</div>";
          $i++;
          if($i==52) {
            break;
          }
        }
      ?>
      </div>
        </div>
      <div class="recipe-btn">
        <a href="">Load More</a>
      </div>
    </section>

    <!-- End recipes -->


<?php 

  require "inc/footer.php"

?>