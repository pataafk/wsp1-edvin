<?php

header("Content-type: text/html; charset=utf-8");
if(empty($_GET['name'])){
    $name = 'du okände';
} else {
    $name = filter_input(INPUT_GET, 
        'name', FILTER_SANITIZE_SPECIAL_CHARS);
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hej</h1>
    <?php echo '<p>Hej ', $name, '</p>'; ?>
</body>
</html>
