<?php
$course = 'Curso profesional de PHP y Laravel'; // 1, TRUE, 1.5

$tags = [
    "PHP", // 0
    "Laravel", // 1
    "HTML", // 2
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ?></title>
</head>

<body>
    <h1>Bienvenido al <?= $course ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio quos illo laboriosam accusantium debitis
        blanditiis quia, quod totam ab repellat magni beatae fuga eligendi neque maiores voluptatibus, aut dicta!</p>

   <p>
       <strong>Etiquetas: </strong>
       <ul>
           <li><?= $tags[0] ?></li>
           <li><?= $tags[1] ?></li>
           <li><?= $tags[2] ?></li>
       </ul>
   </p>

</body>

</html>