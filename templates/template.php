<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

foreach ($data as $cnt) {
    echo '<h2>' . $cnt->title . '</h2>';
    echo '<p>' .  $cnt->article . '</p>';
    echo '<hr>';
}
?>
</body>
</html>
