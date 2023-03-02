<?php


$host = "localhost"; //IP of your database
$userName = "root"; //Username for database login
$userPass = ""; //Password associated with the username
$database = "libas"; //Your database name

$conn = mysqli_connect($host,$userName,$userPass,$database);

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM `product_info` WHERE `product_id` <=4;";
    $product_women_4 = mysqli_query($conn,$selectQuery);
    $selectQuery1 = "SELECT * FROM `product_info` WHERE `product_id` <=8;";
    $product_women_all = mysqli_query($conn,$selectQuery1);

    $sql = "SELECT * FROM `product_info` WHERE `product_id` >8 AND `product_id`<=12;";
    $product_men_4 = mysqli_query($conn,$sql);
    $sql1 = "SELECT * FROM `product_info` WHERE `product_id` >8  ;";
    $product_men_all = mysqli_query($conn,$sql1);

    

   
}






// $mysqli = new mysqli($host,$userName,$userPass,$database, 3306);

// echo $mysqli->host_info . "\n";



?>