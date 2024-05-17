<?php

$username = $_POST['username'];
$password = $_POST['password'];

echo "<h3>Username : {$username}</h3>";
echo "<h3>Password : {$password}</h3>";
?>

<div>
    <h1>You are logged in!</h1>
    <h1> <?php echo $username ?> </h1>
    <h1> <?= $password ?> </h1>
</div>