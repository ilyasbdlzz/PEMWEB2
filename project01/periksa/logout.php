<?php
session_start();

// Hancurkan semua sesi
session_destroy();

// Redirect pengguna kembali ke halaman login
header("Location: ../login.php");
exit();
?>

