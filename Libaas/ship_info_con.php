<?php

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
 
$address = $_POST['address'];
$phone = $_POST['PhoneNo'];



$host = "localhost"; //IP of your database
$userName = "root"; //Username for database login
$userPass = ""; //Password associated with the username
$database = "libas"; //Your database name

$con = mysqli_connect($host,$userName,$userPass,$database);

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
} else {

    $stmt = $con->prepare("INSERT INTO `customer_info`(`FirstName`, `LastName`, `Address`, `PhoneNo`) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $fname,$lname, $address,$phone);
    $execval = $stmt->execute();
		 
		 
}

?>


<html>

<style>
    main{
        position: relative;
        top: 10em;
        
    }
    .msg{
        position: relative;
        left: 20em;
        width: 100%;
        align-items: center;
        justify-content: center;
        display: flex;

    }
    img{
        width: 20%;
        text-align: center;
    }
</style>


<?php

include("menu-bar.php")


?>

<main>
    <div class="msg">
       <img src="/image/thk.png" alt="">
    </div>
</main>

</html>