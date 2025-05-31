<?php
$conn = new mysqli("localhost", "root", "", "crud_app");
if ($conn->connect_error) {
    die("❌ DB Connection failed: " . $conn->connect_error);
}
?>