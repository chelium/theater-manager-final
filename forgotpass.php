<?php
session_start();
?>
<html>
  <head>
    <title>Theater Manager | Forgot Password</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <main id="forgotContainer" class="authContainer">
      <div>
        
      </div>
      <div>
        <form id="forgotForm" class="authForm"
              
              method="post">
          <p class="authPrompt">Forgot Password</p>
          <input type="text" class="loginInputBox"
                 name="name" placeholder="username"
                 required autofocus></br>
          <a href="login.php">Remember password?</a>
          <input type="submit" id="forgotButton"
                 name="logIn" value="Email Me" />
        </form>
      </div>
    </main>
    <?php include 'includes/_footer.php'; ?>
  </body>
</html>