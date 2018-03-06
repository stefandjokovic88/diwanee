<?php
include ('controllers/controller.php');

echo '<h2>Registered users:</h2>';

$user = new UserModel();
$user->getAll();

?>