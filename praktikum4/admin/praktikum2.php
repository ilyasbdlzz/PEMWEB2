<?php 
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<h1>
    Praktikum 2
</h1>

<?php
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Pengguna</title>
</head>
<body>
    <h1>Form Registrasi Pengguna</h1>
    <form action="submit_post.php" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div><br>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div><br>

        <div>
            <button type="submit">Register</button>
        </div><br>
    </form>

    <?php if(!empty($username) && !empty($password)) : ?>
    <div>
        <h1>You are logged in !</h1>
        <h1>Username : <?php echo $username ?></h1>
        <h1>Password : <?= $password ?></h1>
    </div>
    <?php endif; ?>
</body>
</html>


<?php require_once 'footer.html'; ?>