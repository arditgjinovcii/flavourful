<?php 
$page = "recipes";
require "inc/header.php"

?>


<?php


if(isset($_GET['recipe_id'])) {
  $recipe_id = $_GET['recipe_id'];
  $recipe = getRecipeById($recipe_id);
  $recipe_name = $recipe['recipe_name'];
  $recipe_description = $recipe['description'];
  $recipe_img = $recipe['image_url'];
  $author_id = $recipe['author_id'];
  $author = getAuthorByRecipe($author_id);
  $author_name =  $author['user_name'];
  $author_img = $author['image_url'];
  $datecreated = $recipe['created_at'];
  $preptime = $recipe['prep_time_minutes'];
  $totaltime = $recipe['total_time_minutes'];
  $servings = $recipe['servings'];
}
?>
    <div class="all-recipes container">
      <i class="fa-solid fa-arrow-left"></i>
      <a href="recipes.html">Back to All Recipes</a>
    </div>

    <article class="recipe-page container">
      <div class="recipe-page-stats">
        <div class="recipe-stats">
          <i class="fa-solid fa-chart-line"></i>
          <span>85% would make this again</span>
        </div>
        <div class="recipe-favorites-link profile-link">
          <a href="favorites.html" class="btn btn-favorites">
            <i class="fa-regular fa-heart"></i>
            <span>Favorites</span>
          </a>
        </div>
      </div>

      <div class="recipe-page-title">
        <h2>Strawberry Cream Cheesecake</h2>
      </div>

      <div class="recipe-page-details">
        <div class="recipe-details-img">
          <img src="images/recipeauthor1.png" alt="" />
        </div>
        <div class="recipe-details-author">
          <p>Trishia Albert</p>
        </div>
        <div class="recipe-details-date">
          <i class="fa-regular fa-calendar"></i>
          <span>Yesterday</span>
        </div>
        <div class="recipe-details-rating">
          <div class="recipe-stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
        </div>
      </div>

      <div class="hr"></div>

      <div class="recipe-page-content">
      <p class="recipe-content-description">
        One thing I learned living in the Canarsie section of Brooklyn, NY was how to cook a good Italian meal. Here is a recipe I created after having this dish in a restaurant. Enjoy!
      </p>

      <div class="recipe-content-image">
        <img src="images/recipepage1.jpg" alt="">
      </div>
    </div>

      <div class="recipe-prepare-details">
        <div class="prep-time">
          <p class="title">Prep time</p>
          <p class="time">15 Min</p>
        </div>

        <div class="prep-time">
          <p class="title">Prep time</p>
          <p class="time">15 Min</p>
        </div>

        <div class="prep-time">
          <p class="title">Servings</p>
          <p class="time">4 people</p>
        </div>
      </div>


      <section class="recipe-ingredients-instructions">
        <div class="ingredients-nutritions">
          <div class="ingredients">
            <h3 class="ingredients-title">Ingredients</h3>
            <ul class="ingredients-list">
              <li class="ingredients-list-item">400g lorem</li>
              <li class="ingredients-list-item">150g butter</li>
              <li class="ingredients-list-item">300g marshmallow</li>
            </ul>
          </div>
          <div class="nutritions">
            <h2 class="nutritions-title">Nutrition Facts</h2>
              <ul class="nutritions-list">
                <li class="nutritions-list-item">
                  <p id="calories">Calories</p>
                  <p id="calories-amount">219.9</p>
                </li>

                <li class="nutritions-list-item">
                  <p id="calories">Calories</p>
                  <p id="calories-amount">219.9</p>
                </li>

                <li class="nutritions-list-item">
                  <p id="calories">Calories</p>
                  <p id="calories-amount">219.9</p>
                </li>

                <li class="nutritions-list-item">
                  <p id="calories">Calories</p>
                  <p id="calories-amount">219.9</p>
                </li>

                <li class="nutritions-list-item">
                  <p id="calories">Calories</p>
                  <p id="calories-amount">219.9</p>
                </li>

                <li class="nutritions-list-item">
                  <p id="calories">Calories</p>
                  <p id="calories-amount">219.9</p>
                </li>

                <li class="nutritions-list-item">
                  <p id="calories">Calories</p>
                  <p id="calories-amount">219.9</p>
                </li>

                <li class="nutritions-list-item">
                  <p id="calories">Calories</p>
                  <p id="calories-amount">219.9</p>
                </li>
                
              </ul>
          </div>
        </div>

        
<!-- 
  
if ($result->num_rows > 0) {
    echo "<ol>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["step_text"] . "</li>";
    }
    echo "</ol>";
} else {
    echo "No instructions available for this recipe.";
}
 -->

        <div class="instructions">
          <h2 class="instructions-title">Instructions</h2>
          <ol class="instructions-list">
            <li class="instructions-list-item">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, blanditiis?</li>
            <li class="instructions-list-item">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, blanditiis?</li>
            <li class="instructions-list-item">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, blanditiis?</li>
            <li class="instructions-list-item">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, blanditiis?</li>
            <li class="instructions-list-item">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, blanditiis?</li>
            <li class="instructions-list-item">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, blanditiis?</li>
            <li class="instructions-list-item">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, blanditiis?</li>
          </ol>
        </div>

      </section>
    </article>


    
<?php 

  require "inc/footer.php"

?>
