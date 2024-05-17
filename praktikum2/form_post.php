<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form metode Post</title>
</head>
<body>
    <form action="submit_post.php" method ="POST">
        <h1>Form Registrasi Pengguna</h1>
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
        </div>
    </form>
</body>
</html>