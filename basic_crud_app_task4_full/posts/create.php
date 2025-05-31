<?php
require_once("../includes/db.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST["title"]);
    $body = trim($_POST["body"]);
    $stmt = $conn->prepare("INSERT INTO posts (title, body) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $body);
    if ($stmt->execute()) {
        echo "✅ Post created. <a href='read.php'>View Posts</a>";
    } else {
        echo "❌ Error creating post.";
    }
}
?>
<form method="POST">
    Title: <input name="title" required><br>
    Body: <textarea name="body" required></textarea><br>
    <button type="submit">Create</button>
</form>