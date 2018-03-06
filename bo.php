<?php session_start() ?>
<html>
<head>
  <title>BO</title>
  <link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
<div class="header">
    <h1>BO</h1>
</div>

<div class="topnav">
  <a class="active" href="bo.php">Home</a>
  <a href="listallusers.php">List All Users</a>
  <a href="logout.php">Logout</a>
</div>

<h1>
	<?php
	echo 'Hello ' . $_SESSION['username'];
	?>
</h1>

</form>
</body>
</html>