<?php
session_start();
?>
<html>
  <head>
    <title>Theater Manager | Login</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <header id="loginHeader">
      <h1>Welcome to Theater Manager</h1>
    </header>
    <main id="loginContainer" class="authContainer">
      <div>
        
      </div>
      <div>
        <form id="loginForm" class="authForm"
              
              method="post">
          <p id="loginPrompt">Please Sign In</p>
          <input type="text" class="loginInputBox"
                 name="name" placeholder="username"
                 required autofocus></br>
          <input type="password" class="loginInputBox"
                 name="pass" placeholder="password"
                 required></br>
          <a href="forgotpass.php">Forgot password?</a>
          <input type="submit" id="loginButton"
                 name="logIn" value="Log in" />
        </form>
      </div>
    </main>
    <?php include 'includes/_footer.php'; ?>
  </body>
</html>
