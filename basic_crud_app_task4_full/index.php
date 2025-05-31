<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: auth/login.php");
    exit();
}
echo "✅ Welcome, " . htmlspecialchars($_SESSION['username']) . "! <a href='auth/logout.php'>Logout</a>";
?>