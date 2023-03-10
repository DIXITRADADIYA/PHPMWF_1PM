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
    if(isset($_POST["ob"]))
    {
        $ccc=$_POST["c"];
        $java=$_POST["j"];
        $net=$_POST["n"];
        $total;
        $aveg;


        $total=$ccc+$java+$net;
        $aveg=$total/300*100;


        if(0<$aveg || 100>$aveg)
        {
            echo "aveage :".$aveg;
        }
        else
        {
            echo "enter valid number";
        }
    }

    ?>
    <form method="post">
        <h3>enter the c mark </h3>
        <input type="text" name="c" required><br><br>
        <h3>enter the javascript mark</h3>
        <input type="text" name="j" required><br><br>
        <h3>enter the networking mark</h3>
        <input type="text" name="n" required><br><br>
        <input type="submit" name="ob" value="submit">
</form>
    
</body>
</html>