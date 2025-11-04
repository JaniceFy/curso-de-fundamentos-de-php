<?php

class Course
{
    public function __construct(
        public string $title,
        public string $subtitle,
        public string $description,
        public array $tags

    ) {

    }

}

$course = new Course(
    title: 'Curso profesional de PHP y Laravel',
    subtitle: 'Aprende PHP y Laravel desde cero',
    description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio quos illo laboriosam accusantium debitis
        blanditiis quia, quod totam ab repellat magni beatae fuga eligendi neque maiores voluptatibus, aut dicta!',
    tags: [
        'PHP',
        'Laravel',
        'HTML',
        'CSS',
        'JavaScript'
    ]
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->title ?></title>
</head>

<body>
    <h1>Bienvenido al <?= $course->title ?></h1>

    <h1><?= $course->subtitle ?></h1>

    <p><?= $course->description ?></p>

    <p>
        <strong>Etiquetas: </strong>
    <ul>
        <?php foreach ($course->tags as $tag): ?>
            <li><?= $tag ?></li>
        <?php endforeach ?>
    </ul>
    </p>

</body>

</html>