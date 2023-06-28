<!DOCTYPE html>
<html>
<head>
<title> 
        GameLink 
</title>

<link rel='stylesheet' href='Home.css'>
<link rel="stylesheet" href="Horror.css">

</head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

 

                
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

</head>

<body>

<h1 class='h1'> 
<a href=project.php>
        GameLinks
</a>
</h1>

<div class='div1'>

<div  class='banner'>
<h1 class='page'>
        please login
</h1>
</div>

<div class='div1'>


 

        
</div>

<?php

$name = "jose jaja ";
echo "hello world!!<br>";
echo "hello $name<br>";
echo strlen("($name)<br>")

?>


<form action="project.php" method="post">
username:<input type="text" name="username">
password:<input type="text" name="password">
<br>
<input type=submit>
</form>
<br>
<form action="project.php" method="post">
username:<input type="text" name="email">
<br>
<input type=submit>
</form>
www	

<?php
$username = $_POST["username"];
$password = $_POST["password"];
$email = array("jose"=>"lomantilla2006@gmail.com","papa"=>"jose.lo.huang","mama"=>"lourdesmantilla@gmail.com");

echo "my username is $username<br>";
echo "my password is $password<br>";
echo $email[$_POST["email"]];

?>

</html>