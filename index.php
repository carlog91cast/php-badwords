<?php
 $badWords = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum aperiam sit quidem delectus temporibus. Temporibus iste deserunt debitis dicta delectus quod quos expedita tempore, labore quidem quae in ea voluptate';
 $censuredName = $_GET["name"];
 $censuredWord = str_replace($censuredName,'***', $badWords );
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h1>Bad Words</h1>
    <p>
        <?php
            echo $badWords;
            echo strlen($badWords);
            echo $_GET["name"];
            echo $censuredWord;
            echo strlen($censuredWord);
        ?>
    </p>
</body>
</html>