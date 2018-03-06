<?php
session_start();

if (!empty($_SESSION['username'])) {
    header('Location: bo.php');
}
?>

<html>
<head>
	<title>Login page</title>
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
	<?php
    if (isset($result)) {
        echo $result['status'];
    }
	?>

	<div class="header">
    <h1>Login & Register</h1>
	</div>

	<form action="" method="POST">
			<label>Username </label><input type="text" id="username" name="username" class="textInput" required="required"><br><br>
  			<label>Password </label><input type="password" id="password" name="password" class="textInput" required="required"><br><br>    
  			<input type="submit" name="login" value="Login">
	</form>
	<form action="" method="POST">
  			<label>Username </label><input type="text" name="username" class="textInput" required="required"><br><br>
  			<label>Email </label><input type="text" name="email" class="textInput" required="required"><br><br>
  			<label>Password </label><input type="password" name="password" class="textInput" required="required"><br><br>
  			<label>Confirm Password </label><input type="password" name="confirmPassword" class="textInput" required="required"><br><br>    
  			<input type="submit" name="register" value="Register">
	</form>

</body>
</html>