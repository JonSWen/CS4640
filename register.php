<!--Created by Jonathan Wen (jsw2dg), working with Margaret Chen (mdc5bv) on CS4640 Web PL project-->
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link href="signUp.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light">
  <img src="logo.png" class="navbar-brand" style="width:150px"/>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-item nav-link" href="#">Contact Us</a>
      </div>
  </div>
  </nav>

<!--Form-->
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
      <h2 style="font-family: Poppins, sans-serif; padding-bottom: 25px; padding-top:-100px;">The first step to a better you</h2>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" id="Username" class="fadeIn second" name="uploadstyle" placeholder="Username">
  	</div>
  	<div class="input-group">
  	  <label>Email Address</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>"  id="Email" class="fadeIn second" name="uploadstyle" placeholder="ex. abc@gmail.com">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1"  id="PasswordOne" class="fadeIn second" name="uploadstyle" placeholder="Password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" id="PasswordTwo" class="fadeIn second" name="uploadstyle" placeholder="Confirm Password">
  	</div>
  	<div class="input-group">
        <input type="submit" name="reg_user" class= "signUp" class="fadeIn fourth" value="Sign Up">
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
</div>
</body>
</html>

<!--
<!DOCTYPE html>
<head>
<html lang="en">
</head>
-->


-->

<!--Form-->
<!--
<div class="wrapper fadeInDown">
    <div id="formContent">
      <h2 style="font-family: Poppins, sans-serif; padding-bottom: 25px; padding-top:-100px;">The first step to a better you</h2>
      <form method="post" action="signUp.php">
        <p>Email</p>
        <input type="text" name = "email" id="Email" class="fadeIn second" name="uploadstyle" placeholder="ex. abc@gmail.com">
        <p>Username</p>
        <input type="text" name="username" id="Username" class="fadeIn second" name="uploadstyle" placeholder="Username">
        <p>Password</p>
        <input type="password" name= "password1" id="PasswordOne" class="fadeIn second" name="uploadstyle" placeholder="Password">
        <p>Retype Password</p>
        <input type="password" name = "password2" id="PasswordTwo" class="fadeIn second" name="uploadstyle" placeholder="Confirm Password">
        <input type="submit" name="register" class= "signUp" class="fadeIn fourth" onclick="checkPassword()" value="Sign Up">      
        <p>Already a member? </p>
        <a href="login.php" class="fadeIn fourth" > Sign in </a>  
      </form>
    </div>
-->
    <!--Password Matching-->
<!--
    <script> 

            function checkPassword(form) { 
                var password1 = document.getElementById("PasswordOne").value;
                var password2 = document.getElementById("PasswordTwo").value;
                if (password1 == '') 
                    alert ("Please enter Password"); 
                else if (password2 == '') 
                    alert ("Please enter confirm password");    
                else if (password1 != password2) { 
                    alert ("\nPasswords do not match") 
                    return false; 
                } 
            } 
        </script> 
</div>
</html>
 -->
