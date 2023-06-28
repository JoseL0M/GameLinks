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
        Please Login
</h1>
</div>

<div class='div1'>


 

        
</div>
<div class='php'>
<?php error_reporting(0); ?>
<form action="project.php" method="post">
username:<input type="text" name="username">
password:<input type="text" name="password">
<br>
<input type=submit>
</form>
<br>


<?php
$username = $_POST["username"];
$password = $_POST["password"];
echo "My username is $username<br>";
echo "My password is $password<br>";

if($username=="jose" && $password=="123"){
?>
<script type="text/javascript">
window.location.href = 'index.html';
</script>
<?php
}

elseif($username=="lisa" && $password=="lisasa"){
?>
<script type="text/javascript">
window.location.href = 'index.html';
</script>
<?php
}

elseif($username=="Alice" && $password=="1125"){
?>
<script type="text/javascript">
window.location.href = 'index.html';
</script>
<?php
}

elseif($username=="DU" && $password=="DU123"){
?>
<script type="text/javascript">
window.location.href = 'index.html';
</script>
<?php
}

else{
	echo "Sorry your credentials are incorrect";
}
?>
</div>
</body>
</html>


