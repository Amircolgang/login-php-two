<?php
require_once("config/loader.php");
?>


<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up">
      <!-- // sign-up -->
      <form method="POST" action="./action/sing-up.php">
        <h1>Create Account</h1>
        <div class="social-icons">
          <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>or use your email to registration</span>
        <input type="text" name="username" placeholder="userName">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="mobile" placeholder="MObileNumber">
        <input type="password" name="password" placeholder="Password">
        <button name="signup" type="submit">Sign Up</button>
      </form>
    </div>
    <div class="form-container sign-in">
      <!-- login  -->
      <form method="POST" action="./action/sing-in.php">
        <h1>Sign In</h1>
        <br>
        <span>or use your email/password</span>
        <input type="text" name="key" placeholder="Mobile / Username / Password">
        <input type="password" name="password" placeholder="Password">
        <a href="#">Forget your Password?</a>
        <div style="display: inline;">
          <button type="submit" name="signin">Sign In</button>
          <a style="margin-left: 15px" href="otp.php">Send OTP</a>
        </div>
        <?php if(isset($_GET["notuser"])) {?>
            <p class="w-[100%] p-[2.5]  rounded-[0.5rem] bg-red-200"> User Not Find</p>
          <?php }else if(isset($_GET["login"])){?>
              <p class="w-[100%]  p-[2.5rem] rounded-[0.5rem] bg-green-200">Login User</p>
          <?php }?>
      </form>
      <!-- login  -->
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Enter your Personal details to use all of site features</p>
          <button class="hidden" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>Register with your Personal details to use all of site features</p>
          <button class="hidden" id="register">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="./assets/script/js/script.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</html>