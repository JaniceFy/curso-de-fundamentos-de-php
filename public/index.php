<?php

$app = require __DIR__ . '/../bootstrap.php';

$question = $__POST['question'] ?? '';
$answer = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $question) {
    $answer = $app->getResponse($question);
}
?>

<form method="POST">
    <label for="question">Question:</label>
    <input type="text" name="question" value="<?= htmlspecialchars($question) ?>" required>
    <input type="submit" value="Ask">
</form>

<p>
    <strong>Answer:</strong>
    <?= htmlspecialchars($answer) ?>
</p>