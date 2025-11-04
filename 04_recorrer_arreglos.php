<?php
$course = 'Curso profesional de PHP y Laravel'; // 1, TRUE, 1.5

$tags = [
    "PHP",  //0
    "Laravel",  //1
    "HTML", //2
    "CSS", //3
    "JavaScript",   //4
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
           <?php foreach ($tags as $tag) : ?>
            <li><?= $tag ?></li>
           <?php endforeach ?>
       </ul>
   </p>

</body>

</html>