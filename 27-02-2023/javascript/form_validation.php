<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='js/valid.js'></script>
    <style>
        #error
        {
            color:red;
            margin-left:6%;
        }
        </style>
</head>
<body>
    <center>
        <h1>Form Validation</h1>
        <form method="post" action="welcome.php" name="frm" onsubmit="return test(this.value)">

        Enter Name:<input type="text" name="name"
        placeholder="Name *">
        <br>
        <span id="error"></span>
        <br>

        Enter FirstName:<input type="text" name="fname" placeholder="FirstName *">
        <br><br>

        Enter LastName:<input type="text" name="lname" placeholder="LastName *">
        <br><br>

        <input type="submit" name="sub"
        value="Register">
    </form>
    </center>
    
</body>
</html>