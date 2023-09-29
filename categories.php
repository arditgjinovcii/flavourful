<?php 
$page = "categories";
require "inc/header.php"

?>
    <!-- Start categories -->
    <div class="categories-page container">
    <h2 class="categories-page-title">Categories</h2>

    <div class="hr"></div>

    
    <section class="categories-page-wrapper">
        <?php 
        $categories = getCategories();
        
        while($category = mysqli_fetch_assoc($categories)) {
            $category_name = $category['category_name'];
            $image_url = $category['image_url'];
            echo "<div class='categories-page-item'>";
                echo "<div class='categories-page-img'>";
                    echo "<img src='$image_url' alt='$category_name'>";
                echo "</div>";
                echo "<p class='categories-page-name'>$category_name</p>";
            echo "</div>";
        }
    ?>
            <!-- <div class="categories-page-img">
                <img src="./images/categories/breakfast.png" alt="">
            </div>
            <p class="categories-page-name">Seafood</p>
        </div>

        <div class="categories-page-item">
            <div class="categories-page-img">
                <img src="images/categorypage1.png" alt="">
            </div>
            <p class="categories-page-name">Seafood</p>
        </div>

        <div class="categories-page-item">
            <div class="categories-page-img">
                <img src="images/categorypage1.png" alt="">
            </div>
            <p class="categories-page-name">Seafood</p>
        </div>

        <div class="categories-page-item">
            <div class="categories-page-img">
                <img src="images/categorypage1.png" alt="">
            </div>
            <p class="categories-page-name">Seafood</p>
        </div>

        <div class="categories-page-item">
            <div class="categories-page-img">
                <img src="images/categorypage1.png" alt="">
            </div>
            <p class="categories-page-name">Seafood</p>
        </div> -->

    </section>
</div>

<?php 

require "inc/footer.php"

?>