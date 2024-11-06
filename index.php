<?php
session_start();
require 'db.php';

$stmt = $pdo->query("SELECT threads.id, threads.title, users.username, threads.created_at 
                     FROM threads 
                     JOIN users ON threads.user_id = users.id 
                     ORDER BY threads.created_at DESC");
$threads = $stmt->fetchAll();
?>

<a href="thread_create.php">Create New Thread</a>
<h1>Thread List</h1>
<ul>
    <?php foreach ($threads as $thread): ?>
        <li>
            <a href="thread_view.php?id=<?= $thread['id'] ?>"><?= htmlspecialchars($thread['title']) ?></a> by <?= htmlspecialchars($thread['username']) ?> at <?= $thread['created_at'] ?>
        </li>
    <?php endforeach; ?>
</ul>

