<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $stmt = $pdo->prepare("INSERT INTO threads (user_id, title, content) VALUES (?, ?, ?)");
    $stmt->execute([$_SESSION['user_id'], $title, $content]);

    header("Location: index.php");
    exit();
}
?>

<form method="POST">
    Title: <input type="text" name="title" required>
    Content: <textarea name="content" required></textarea>
    <button type="submit">Create Thread</button>
</form>
