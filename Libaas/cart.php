<?php
session_start();
$cart =  $_SESSION['cart'];

$count = count($cart);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500&family=Ubuntu:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600&;700display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>Libaas </title>
    <!-- <link rel="stylesheet" href="/style/woman-category.css"> -->
     
    <link rel="stylesheet" href="/style/cart.css">
</head>
<body>



    <header>   

        <section id="header">

            <section id="top-msg">
                <h3>
                    Free Delivery Over 3000 &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; <a href="return_policy.php">Free Return</a>
                </h3>
            </section>
            <section id="navbar">

                <a id="logo" href="" > LIBAAS </a>
                <nav id="nav-menu">
                    <ul>
                        <li class="nav-items"><a class="home1" href="index.php">Home</a></li>
                        <li class="nav-items"><a href="men.php">Men</a></li>
                        <li class="nav-items"><a href="woman.php">Women</a></li>
                        <li class="nav-items"><a href="about.php">About</a></li>

                    </ul>
                    <div class="nav-right">
                      

                       <li class="nav-items" id="Nav-cart"><a href="cart.php"><i class='bi bi-bag icon-large' title="cart"></i><span><?php  echo $count
                        ?></span></a></li>
                        

                    </div>
                     

                </nav>

            </section>
    
        </section>
        
        </header>    

<?php



?>
        

<main>
<div class="topmsg">
<h2>
    SHOPPING CART
</h2>
</div>


 
<div class="product_container">
 
 <hr>
 <?php

 include('conn/connection.php');
 $total = 0;
 foreach ($cart as $key => $value) {
   
     $sql = "SELECT * FROM  `product_info` WHERE `product_id`=$key";
     $result = mysqli_query($conn,$sql);



      $row = mysqli_fetch_assoc($result);

 ?>

<div class="Productdetail">

    <div class="p">

    

    <div class="product">
    <a href="product_desc.php?proid=<?php echo $row['product_id']?>"> 
        <img src="<?php echo $row["img_file_name"] ?>" >

        <p class="name"><?php echo $row["product_name"] ?></p>
    </a>
        <div class="size">
            <h4>Size : &nbsp;</h4>
            <p><?php echo $value['SELECTSIZE'] ?></p>
        </div>
    </div>

    <div class="qty">
        <h6>QTY : &nbsp;</h6>
        <p><?php echo $value['quantity'] ?></p>
    </div>

    <div class="price">
        <h6>PKR : &nbsp; </h6>
        <p><?php echo $row['product_price'] * $value['quantity'] ?> </p>
    </div>

    <div class="delete">
        <a href="delete.php?id=<?php echo $key; ?>">
    <i class="fa fa-trash-o" aria-hidden="true"></i></a>
    </div>
    


    <hr class="linedown">

    </div>
</div> 

<?php
        $total = $total +  ($row['product_price'] * $value['quantity']);
 }

?>
<!--  -->
</div>

</div>
<div class="cont-shopping">
    <a href="men.php">

        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <p > Continue Shopping</p>

    </a>
</div>




</main>

<div class="total">

    
    <div class="SUBTOTAL">
    <h4> Subtotal: PKR </h4>
    <p class="subpkr"><?php echo $total; ?></p>
    </div>
    <div class="grandtotal">

        <h4>Grand Total:</h4>
        <h4 class="grandpkr">PKR <?php echo $total; ?></h4>
    </div>
    <a href="shiping-address.php">
    <div class="btn-to-chk-out">
        <a href="shiping-address.php">PROCEED TO CHECKOUT</a>
        
    </div>
    </a>
       
</div>
      


</body>
</html>

