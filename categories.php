<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="cat_style.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php

require_once("config.php");

$connection=mysqli_connect(DBHOST,DBUSER,DBPASSWORD,DBNAME);

if(mysqli_connect_error()){
die(mysqli_connect_error());
}

$sql="SELECT * FROM categories";
$result=mysqli_query($connection,$sql);
?>
</head>

<body>
<div class="container">
<ul class="list">
<h5 id="cat_tag">Categories</h5>
<?php  
while($row=mysqli_fetch_assoc($result)){
?>
<li>
    
<img src="<?=row['cat_image']?>">

</li>
<?php
}
?>
</ul>
</div>
</body>
</html>