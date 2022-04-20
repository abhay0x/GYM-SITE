<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="/gym.css"> -->
    <style>.body{
    height: 900px;
   
}

.image{
    height: 1100px;
    width: 1583px;
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: -1;
}
.nav{
    position: absolute;
    left: 700px;
    top: 7px;
    z-index: 2;
    
     }
     
     .navelement{

         padding-right: 64px;
         padding-top: 5px;
         font-size: 20px;
         z-index: 2;
         color: aliceblue;
     }
     .navbg{
         width: 1583px;
         height:60px;
        background-color: black;
         z-index:1;
         position: absolute;
         left: 0px;
         top: 0px;

     }
     .a{
         text-decoration: none;
         color: aliceblue;
     }
     .form{
         border: 2px solid black;
         width: 750px;
         height: 440px;
         position: absolute;
         left: 55px;
         top: 300px;
         border-radius: 10px;
     }
     .input{
         display: block;
         width: 395px;
         height: 20px;
         margin-left: 165px;
         margin-top: 20px;
         padding: 9px;
         position: relative;
         top: 76px;
        
     }
     #btn{
         width: 395;
         height: 35px;
         margin-left: 174px;
     }
     .a2{
         text-decoration: none;
         color: black;
     }</style>
</head>
<body class="body">







    
    <div class="container">
        <ul class="nav">
            <li1 class="navelement"><a href="#" class="a"> HOME </a></li1>
            <li2 class="navelement"><a href="#" class="a"> PERSONAL TRAINING </a></li2>
            <li3 class="navelement"><a href="#" class="a"> LOCATION & PRICING </a></li3>
            <li4 class="navelement"><a href="#" class="a"> Contact Us </a></li4>
        </ul>
    </div>
    <div class="navbg"></div>
<img src="/gym/bg.jpg" alt=""   class="image">

    <form action="/gym/gymproject.php" method="POST" class="form">
<label for="name"></label>
<input type="text" name="name" placeholder="ENTER YOUR NAME" class="input">
<label for="email"></label>
<input type="email" name="email" placeholder="ENTER YOUR EMAIL" class="input">
<label for="number"></label>
<input type="number" name="number" placeholder="PHONE NUMBER"class="input" >
<!-- <textarea name="decs" id="decs" cols="30" rows="5"></textarea> -->
<button class="input" id="btn" >SUBMIT</button>
</form>
</div>

<?php


if($_SERVER["REQUEST_METHOD"]=='POST'){
    
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];

$servername="localhost";
$username="root";
$password="";
$database="gym";

$conn=mysqli_connect($servername ,$username , $password , $database );


$sql= "INSERT INTO `gymdetails` (`Name`, `email`, `number`, `time`) VALUES ('$name', '$email', '$number', current_timestamp())";
$result=mysqli_query($conn,$sql);

   


}

?>
</body>
</html>