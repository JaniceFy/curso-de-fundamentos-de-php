<?php

require 'Course.php';

$course = new Course(
    title: 'Curso profesional de PHP y Laravel',
    subtitle: 'Aprende PHP y Laravel desde cero',
    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio quos illo laboriosam accusantium debitis
        blanditiis quia, quod totam ab repellat magni beatae fuga eligendi neque maiores voluptatibus, aut dicta!',
    tags: [
        'PHP',
        'Laravel',
        'HTML'
    ]
);

$course->addTag('Backend');
$course->addTag('Desarrollo de software');
$course->addTag('PHP');
$course->addTag('');
$course->addTag('CSS');
$course->addTag('JScript');

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->title ?></title>
</head>

<body>

    <?= $course ?>

    <h3>Tags:</h3>
    <ul>
        <?php foreach ($course->tags as $tag) : ?>
            <li><?= $tag ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>