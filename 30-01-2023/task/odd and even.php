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

    if(isset($_POST["od"]))
{
    $number=$_POST["number"];

    if($number%2==0)
    {
        echo "number is even";
    }
    else
    {
        echo "number id od";
    }
}
?>

<form method="post">
  <h3>enter the number</h3>
  
  <input type="text" name="number" require><br><br>
  <input type="submit" name="od" value="submit">
</form>
</body>
</html>