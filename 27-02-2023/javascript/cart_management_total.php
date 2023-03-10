<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script>
        function crttotal()
        {
             var price=document.getElementById("price").value;
             var qty=document.getElementById("qty").value;
             var t=price*qty;
             document.getElementById("tot").innerHTML=t;
        }
    </script>
</head>
<body>
    <h2 style="margin-left: 16%;">View Cart</h2>
    <table width="70%" align="center" border="0">
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>pname</th>
            <th>price</th>
            <th>select qty</th>
            <th>Action</th>
            
        </tr>

        <tr align="center">
            <td>1201</td>
            <td><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.metline-pipefittings.in%2Fproduct%2Fflexible-hose-pipes%2Fss-flexible-hose-with-camlock-coupling%2F&psig=AOvVaw2nFN5GXqsTFx-8JJwzmZt9&ust=1677592905091000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCOjEiNvutf0CFQAAAAAdAAAAABAE" width="65px" height="65px"></td>
            <td>ss couplin</td>
            <td>Rs.<input type="text" name="price" id="price" value="125" style="border: none; width:65px" readonly></td>
            <td><input type="number" id="qty" min="1" max="150" value="1" onchange="crttotal()"></td>
            <td><a href="#">delete</a></td>
            
        </tr>

        <tr>
           
            <td align="right" colspan="6"><h3 style="background-color: black
            ; color:white; padding:15px; width:50%">Subtotal of products Rs. <label id="tot">125</label></h3></td>
          
        </tr>

    </table>
</body>
</html>