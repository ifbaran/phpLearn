<?php declare(strict_types = 1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mypage.php" method="post">
        <input type="text" name="myString">
        <input type="submit">
    </form>

    <a href= "gethtmlform.php?myString=Foo+Bar" name="myString">link</a>

</body>
</html>

