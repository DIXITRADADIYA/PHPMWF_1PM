<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function chng1()
        {
            document.getElementById("imgg").
            src='img/1.png';
        }
        function chng2()
        {
            document.getElementById("imgg").
            src='img/2.png';
        }
        </script>

</head>
<body>

     <img id="imgg" src="img/1" style="width:350px; height:300px; margin-left:35%; margin-top:5%"
     onmouseover="chng2()" onmouseout="chng1()">

    
</body>
</html>