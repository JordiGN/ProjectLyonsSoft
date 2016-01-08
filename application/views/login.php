<?php include_once("sections/header.php") ?>
<body class="login">
<!-- Image that triggers the color configuration bar -->
<img src="images/gear.png" id="OptionColor">

<!-- Image that triggers the background configuration bar -->
<img src="images/picture.png" id="OptionBack">

	<!-- Login Box -->
	<div class="LoginBox">

		<!-- live avatar -->
		<img src="images/avatar.png">

		<!-- Login Message -->
		<h2 class="loginMessage"></h2>

		<!-- Form Fields -->
		 <div class="fields">
			<form  action="index.php/welcome/mainMenu" method="POST" id="frmLogin">
				<input type="text" id="txtUser" name="Usuario" placeholder="Username"/>
				<p></p>
				<input type="password" id="txtPassword" name="txtPassword" placeholder="Password"/>
				<!-- buttons eye and  -->
				<img src="images/eye.png" class="seePass">
				<button type="submit" id="login-button"></button>
			</form>
		</div>
	</div>
	<script src="js/MetroLogin.js"></script>
	<?php include_once("sections/footer.php") ?>

	<!-- <form  action="index.php/welcome/panelPrincipal" method="POST">
			<input type="text" placeholder="Username" id="login">
			<input type="password" placeholder="Password" id="login">
			<button type="submit" id="login-button" >Login</button>
		</form> -->
