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

$h = "localhost"; //IP of your database
$u = "root"; //Username for database login
$up = ""; //Password associated with the username
$db = "libas"; //Your database name

 $c = mysqli_connect($h,$u,$up,$db);

 if(!$c)
 {
    die ("connection Failled".mysqli_connect_error());
 }
 echo "okokokok";
 
 if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();}
    else
    {
        $selectQuery = "SELECT `img_file_name` FROM `product_info` WHERE `product_id` = 1;";
        $product = mysqli_query($c,$selectQuery);
    }
//     ?>
//     <h1>hello</h1>
//     <?php
    $row = mysqli_fetch_assoc($product);
//     ?>
//     <img src="<?php echo $row["img_file_name"] ?>" alt="Sorry">
</body>
</html>