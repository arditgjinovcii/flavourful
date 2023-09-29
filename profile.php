<?php 

require "inc/header.php"

?>
    <section class="profile-page container">
      <h2 class="profile-title">Profile</h2>
      <div class="hr"></div>

      <div class="main-page">
        <section class="sidebar">
          <div class="vr"></div>
          <div class="profile-links">
            <div class="profile-links-top">
              <div class="profile-link">
                <a href="user-recipes.html" class="btn btn-check-recipes">
                  <i class="fa-solid fa-pizza-slice"></i>
                  <span>Your recipes</span>
                </a>
              </div>

              <div class="profile-link">
                <a href="favorites.html" class="btn btn-favorites">
                  <i class="fa-regular fa-heart"></i>
                  <span>Favorites</span>
                </a>
              </div>

              <div class="profile-link">
                <a href="user-recipes.html" class="btn btn-check-recipes">
                    <i class="fa-solid fa-plus"></i>                  
                    <span>Add recipes</span>
                </a>
              </div>

              <div class="profile-link">
                <a href="user-recipes.html" class="btn btn-check-recipes">
                    <i class="fa-regular fa-trash-can"></i>
                  <span>Delete recipes</span>
                </a>
              </div>

              <div class="profile-link">
                <a href="user-recipes.html" class="btn btn-check-recipes">
                    <i class="fa-solid fa-plus"></i>  
                  <span>Add article</span>
                </a>
              </div>

              <div class="profile-link">
                <a href="user-recipes.html" class="btn btn-check-recipes">
                    <i class="fa-regular fa-trash-can"></i>
                  <span>Delete article</span>
                </a>
              </div>
            </div>
            <div class="profile-links-bottom">
              <div class="profile-link">
                <a href="" class="btn btn-logout">
                  <i class="fa-solid fa-right-from-bracket"></i>
                  <span>Log Out</span>
                </a>
              </div>

              <div class="profile-link">
                <a href="" class="btn btn-delete-account">
                  <i class="fa-solid fa-ban"></i>
                  <span class="red">Delete your account</span>
                </a>
              </div>              
            </div>
          </div>
        </section>

        <section class="main-profile">
          <div class="profile-control">
            <div class="profile-control-img">
              <img src="images/profile1.png" alt="Profile" />
            </div>
            <button type="button" class="btn profile-btn-change">
              Change photo
            </button>
            <button type="button" class="btn profile-btn-delete">Delete</button>
          </div>
          <form method="post" class="profile-form">
            <div class="profile-form-group">
              <div class="input-group">
                <label for="fullname">full name</label>
                <div class="form-control-box">
                  <input type="text" name="" id="" />
                  <span><i class="fa-regular fa-user"></i></span>
                </div>
              </div>

              <div class="input-group">
                <label for="fullname">username</label>
                <div class="form-control-box">
                  <input type="text" name="" id="" />
                  <span><i class="fa-regular fa-at"></i></span>
                </div>
              </div>
            </div>

            <div class="profile-form-group">
              <div class="input-group">
                <label for="fullname">email</label>
                <div class="form-control-box">
                  <input type="email" name="" id="" />
                  <span><i class="fa-regular fa-envelope"></i></span>
                </div>
              </div>

              <div class="input-group">
                <label for="fullname">password</label>
                <div class="form-control-box">
                  <input type="password" name="" id="" />
                  <span><i class="fa-solid fa-lock"></i></span>
                </div>
              </div>
            </div>

            <input type="submit" value="Change" class="change-profile" />
          </form>
        </section>
      </div>
    </section>


<?php 

  require "inc/footer.php"

?>