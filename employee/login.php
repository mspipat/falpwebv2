
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FALP - Login </title>
    <link rel="stylesheet" media="screen" href="vendor/particles.js-master/demo/css/style.css">
  	<link href="img/FALP.ico" rel="icon">
 <style>
	body {
	  background-color: #809fff;
	  font-family: "Asap", sans-serif;
	}

	.login {
	  overflow: hidden;
	  background-color: white;
	  padding: 20px 30px 30px 30px;
	  border-radius: 10px;
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  width: 400px;
	  -webkit-transform: translate(-50%, -50%);
	  -moz-transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	  -o-transform: translate(-50%, -50%);
	  transform: translate(-50%, -50%);
	  -webkit-transition: -webkit-transform 300ms, box-shadow 300ms;
	  -moz-transition: -moz-transform 300ms, box-shadow 300ms;
	  transition: transform 300ms, box-shadow 300ms;
	  box-shadow: 5px 10px 10px rgba(2, 128, 144, 0.2);
	}
	.login::before, .login::after {
	  content: '';
	  position: absolute;
	  width: 600px;
	  height: 600px;
	  border-top-left-radius: 40%;
	  border-top-right-radius: 45%;
	  border-bottom-left-radius: 35%;
	  border-bottom-right-radius: 40%;
	  z-index: -1;
	}
	.login::before {
	  left: 40%;
	  bottom: -130%;
	  background-color: rgba(69, 105, 144, 0.15);
	  -webkit-animation: wawes 6s infinite linear;
	  -moz-animation: wawes 6s infinite linear;
	  animation: wawes 6s infinite linear;
	}
	.login::after {
	  left: 35%;
	  bottom: -125%;
	  background-color: rgba(2, 128, 144, 0.2);
	  -webkit-animation: wawes 7s infinite;
	  -moz-animation: wawes 7s infinite;
	  animation: wawes 7s infinite;
	}
	@font-face {
  	font-family: fontBlockGradient;
  	src: url("../font/cocogoose-pro.block-gradient.ttf");
	}
	h1 {
	font-family: fontBlockGradient;
  	display: inline-block;
  	color: #2367A4;
  	font-weight: normal;
  	margin: 0;

	}
	.login > input {
	  font-family: "Asap", sans-serif;
	  display: block;
	  border-radius: 5px;
	  font-size: 16px;
	  background: white;
	  width: 100%;
	  border: 0;
	  padding: 10px 10px;
	  margin: 15px -10px;
	}
	.login > button {
	  font-family: "Asap", sans-serif;
	  cursor: pointer;
	  color: #fff;
	  font-size: 16px;
	  text-transform: uppercase;
	  width: 80px;
	  border: 0;
	  padding: 10px 0;
	  margin-top: 10px;
	  margin-left: -5px;
	  border-radius: 5px;
	  background-color: transparent;
	  -webkit-transition: background-color 300ms;
	  -moz-transition: background-color 300ms;
	  transition: background-color 300ms;
	}
	.login > button:hover {
	  background-color: #3472bc;
	}

	@-webkit-keyframes wawes {
	  from {
	    -webkit-transform: rotate(0);
	  }
	  to {
	    -webkit-transform: rotate(360deg);
	  }
	}
	@-moz-keyframes wawes {
	  from {
	    -moz-transform: rotate(0);
	  }
	  to {
	    -moz-transform: rotate(360deg);
	  }
	}
	@keyframes wawes {
	  from {
	    -webkit-transform: rotate(0);
	    -moz-transform: rotate(0);
	    -ms-transform: rotate(0);
	    -o-transform: rotate(0);
	    transform: rotate(0);
	  }
	  to {
	    -webkit-transform: rotate(360deg);
	    -moz-transform: rotate(360deg);
	    -ms-transform: rotate(360deg);
	    -o-transform: rotate(360deg);
	    transform: rotate(360deg);
	  }
	}
	a {
	  text-decoration: none;
	  color: rgba(255, 255, 255, 0.6);
	  position: absolute;
	  right: 10px;
	  bottom: 10px;
	  font-size: 12px;
	}
	input[type=text],
	input[type=password] {
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    outline: none;
    box-shadow: none;
    border: none;
    border: 1px solid #2367A4;
    border-radius: 5;
    box-sizing: content-box;
    background-color: transparent; 
	}

	#btn-login {
  	font-family: "Poppins", sans-serif;
  	text-transform: uppercase;
  	font-weight: bold;
  	font-size: 16px;
  	letter-spacing: 1px;
  	display: inline-block;
  	/*padding: 8px 28px;*/
  	border-radius: 10px;
  	transition: 0.5s;
  	margin: 10px;
  	border: 1px solid #2367A4;
  	color: #000;
  	width: 100px;
  	margin-left: 315px;
	}

	#btn-login:hover {
   	background: rgba(3, 169, 244, 0.7);
  	border: 2px solid #448aff;
  	color: #fff;
	}
	h3 {
		color: #9e9e9e;
	}
</style>
</head>
<body>
<!-- count particles -->
<!-- <div class="count-particles">
  <span class="js-count-particles"></span> particles
</div> -->

<!-- particles.js container -->
<div id="particles-js">
  <form class="login" action="functions/login.php" method="post">
  	<center><h3> EMPLOYEE'S PORTAL</h3>
    <h1>FURUKAWA AUTOMATIVE SYSTEMS<br>Lima Philippines Inc.</h1></center>
  <input type="text" name="username" placeholder="Username" autofocus="on">
  <input type="password" name="password" placeholder="Password">
  <button type="submit" name="login" id="btn-login">Login</button>
</form>
</div>
<br>
<br>
<?php 
 include 'src/script.php'; 

?>
<script>
 
</script>

</body>
</html>