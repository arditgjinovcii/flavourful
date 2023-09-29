<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width,
						initial-scale=1.0"
    />
    <title>flavourful - login</title>
    <link rel="stylesheet" href="hyrjaregjistrimi.css" />
    <script
      src="https://kit.fontawesome.com/4c051e6f7d.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <header>
      <h1 class="heading">
        <a href="index.html"><i class="fa-solid fa-house"></i>Home Page</a>
      </h1>
      <h3 class="title">Please log-in with your credentials</h3>
    </header>

    <main>
      <div class="container">
        <div class="slider"></div>
        <div class="btn">
          <button class="login">Login</button>
          <button class="signup">Signup</button>
        </div>

        <!-- Form section that contains the
			login and the signup form -->
        <div class="form-section">
          <!-- login form -->
          <div class="login-box">
            
            <input
              type="email"
              class="email ele"
              placeholder="youremail@email.com"
            />
            <input
              type="password"
              class="password ele"
              placeholder="password"
            />
            <button class="clkbtn">Login</button>
          </div>

          <!-- signup form -->
          <div class="signup-box">
            <input type="text" class="name ele" placeholder="Enter your name" />
            <input
              type="email"
              class="email ele"
              placeholder="youremail@email.com"
            />
            <input
              type="password"
              class="password ele"
              placeholder="password"
            />
            <input
              type="password"
              class="password ele"
              placeholder="Confirm password"
            />
            <button class="clkbtn">Signup</button>
          </div>
        </div>
      </div>
    </main>
    <script src="hyrjaregjistrimi.js"></script>
  </body>
</html>
