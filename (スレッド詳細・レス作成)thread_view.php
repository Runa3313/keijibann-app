<?php
session_start();
require 'db.php';

$thread_id = $_GET['id'];
$stmt = $pdo->prepare("SELECT threads.title, threads.content, users.username, threads.created_at 
                       FROM threads 
                       JOIN users ON threads.user_id = users.id 
                       WHERE threads.id = ?");
$stmt->execute([$thread_id]);
$thread = $stmt->fetch();

$stmt = $pdo->prepare("SELECT responses.id, responses.content, users.username, responses.created_at 
                       FROM responses 
                       JOIN users ON responses.user_id = users.id 
                       WHERE responses.thread_id = ? 
                       ORDER BY responses.created_at ASC");
$stmt->execute([$thread_id]);
$responses = $stmt->fetchAll();
?>

<h1><?= htmlspecialchars($thread['title']) ?></h1>
<p><?= htmlspecialchars($thread['content']) ?></p>
<p>Posted by <?= htmlspecialchars($thread['username']) ?> at <?= $thread['created_at'] ?></p>

<h2>Responses</h2>
<ul>
    <?php foreach ($responses as $response): ?>
        <li>
            <?= htmlspecialchars($response['content']) ?> - <?= htmlspecialchars($response['username']) ?> at <?= $response['created_at'] ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php if (isset($_SESSION['user_id'])): ?>
    <form method="POST" action="response_create.php">
        <input type="hidden" name="thread_id" value="<?= $thread_id ?>">
        <textarea name="content" required></textarea>
        <button type="submit">Post Response</button>
    </form>
<?php endif; ?>
