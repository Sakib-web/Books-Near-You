<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script type="text/javascript">
<!--
if (screen.width <= 800) {
document.location = "index_m.html";
}
//-->
</script>

</head>
<body>
	<div class="header">
    <h1 class="logo">OBS</h1>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
      <i class="fas fa-bars" aria-hidden="true"></i>
    </label>

    <ul class="menu">
      <a href="home.html">Home</a>
      <a href="books.html">Books</a>
      <a href="faq.html">FAQ & Help</a>
      <a href="contact.html">Contact</a>
	  <a href="signup.php" style="border: 2.5px solid #168CC5; border-radius: 7px">Become a Member</a>
	  <a href="login.php" style="border: 2.5px solid #168CC5; border-radius: 7px">Login</a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
		</div>
	<br><br><br><br><br><br><br>

	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="bg.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>
