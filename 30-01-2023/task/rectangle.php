<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["sum"]))
    {
        $lan=$_POST["l"];
        $bre=$_POST["r"];
        $to;

        $to=$lan*$bre;

        echo "area of rectangle: ".$to;
    }
    ?>
    <form method="post">
     <h3> enter the length of rectangle </h3>
     <input type="text" name="l" required><br><br>
     <h3> enter the breadth of rectangle </h3>
     <input type="text" name="r" required><br><br>
     <input type="submit" name="sum" value="submit">
</form>  
    
</body>
</html>