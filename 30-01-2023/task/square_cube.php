<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["svs"]))
    {
        $num=$_POST["num"];
        $square;
        $cube;

        $square=$num*$num;
        $cube=$num*$num*$num;

        echo "square of :".$square."<br>";
        echo "cube of :".$cube."<br>";
    }
    ?>
    
</body>
</html>