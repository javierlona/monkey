<?php
$password = "bananas";
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

echo "Password: ". $password . "<br>";
echo "Hashed Password: ". $hashed_password . "<br>";

require_once('../private/initialize.php');

echo "WWW ROOT: " . WWW_ROOT;
?>
