<!--Created by Jonathan Wen (jsw2dg), working with Margaret Chen (mdc5bv) on CS4640 Web PL project-->
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link href="login.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<!--navbar-->
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

<!--form-->
<body>
<div class="wrapper fadeInDown" style="margin-left: 500px;">
    <div id="formContent">
      <h1 style="font-family: Poppins, sans-serif; padding-bottom: 25px; padding-top:-100px;">Welcome!</h1>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" id="Username" class="fadeIn second" name="uploadstyle" placeholder="Username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
      <input type="password" name="password" id="Password" class="fadeIn second" name="uploadstyle" placeholder="Password">
      <p><input type="checkbox" id="PassVis" onclick="showPass()"> Show Password</p>
  	</div>
  	<div class="input-group">
      <input type="submit" name = "login_user" class= "login" class="fadeIn fourth" value="Sign In"> 
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  </div>
</div>
<script>
  function showPass() {
  var x = document.getElementById("Password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>
