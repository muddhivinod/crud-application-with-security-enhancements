<?php
require_once("../includes/db.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit();
}
$result = $conn->query("SELECT * FROM posts");
while ($row = $result->fetch_assoc()) {
    echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
    echo "<p>" . htmlspecialchars($row['body']) . "</p><hr>";
}
?>