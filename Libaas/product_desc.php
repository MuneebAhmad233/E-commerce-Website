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
    <link rel="stylesheet" href="/style/product_desc.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500&family=Ubuntu:ital,wght@0,300;0,400;1,300&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">



    <title>Libaas</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">
 
</head>

<body>

    <header>
        <section id="header">
            <section id="top-msg">
                <h3>
                    Free Delivery Over 3000 &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; <a href="return_policy.html">Free
                        Return</a>
                </h3>
            </section>
            <section id="navbar">

                <a id="logo" href="" onclick="window.location.reload(true)" style="letter-spacing:1px ;"> LIBAAS </a>
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
    <main>

        <!-- Product detail Section -->
        <section id="product-detail"   >
        <?php

require_once("conn/connection.php");




?>

            <?php
             
             

                 

                // $sql = "SELECT * FROM `product_info` WHERE `product_id`=1;";
                // $prodeatil = mysqli_query($conn, $sql);
                //$row = mysqli_fetch_assoc($prodeatil);
                if(isset($_GET['proid'])){
                    $productid=$_GET['proid'];
                $sql = "SELECT * FROM `product_info` WHERE `product_id`=$productid; ";
                $product_d = mysqli_query($conn,$sql);
                
                $row = mysqli_fetch_assoc($product_d);

                }

                 
                 
                

                             
            ?>

            <div class="container">

            
                <div class="left-img">
                    <img class="img-class" src="<?php echo $row["img_file_name"] ?>" alt="">
                </div>
                <div class="right-img-desc">

                    <h2 class="product-name" name="product-name"><?php echo $row["product_name"] ?></h2>
                    <p class="model-wear-size">The model is wearing size: L; Model height: 6.0ft / 183cm</p>
                    <div class="pro-price">
                        <h4>PKR</h4>

                        <h4 class="product-price" name="product-price">  <?php echo $row["product_price"] ?></h4>
                    </div>
                    <hr class="line-break1">
                    <div class="product-color">

                        <h4 class="color">COLORS</h4>
                        <input type="radio" id="colorpicker" value="#FDFEFE" title="WHITE" style="visibility: hidden;">


                    </div>
                    <h4 class="Cloth-size">SIZE</h4>


       <form action="addtocart.php">

                         

                    <select class="select-size" name="SELECTSIZE" title="SELECTSIZE" id="SELECTSIZE" required>
                        
                        <option for="SELECTSIZE" value="Small">Small</option >
                        <option for="SELECTSIZE" value="Medium">Medium</option >
                        <option for="SELECTSIZE" value="Large">Large</option >

                    </select>

                    
                    <input type="hidden" style="display: none;" for="proid" name="proid" value='<?php echo $row['product_id'] ?>'>
                    <input type="number" name="quantity" class="pro-total-piece" value="1" min="1" max="5" title="">
                    
                    <hr class="line-break2">
                    <div class="buy-btn">

                        <input class="add-to-cart" type="submit" title="add to cart" value="add to cart">

                    </div>
     </form>
                    <h3>Product Description</h3>
                    <p class="product-detail" name="product-detail">  <?php echo $row['product_desc'] ?></p>

                </div>
            </div>

        </section>


    </main>

    <footer>
        <div class="banner">
            <div class="banner-img">
                <img src="/image/b111.png" alt="" height="50px">
            </div>
            <div class="banner-name">
                <h3>
                    a style for every story
                </h3>
            </div>
        </div>
        <div id="footer-mid">
            <div class="footer-items">

                <a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook-square" title="Facebook" ></i></a>
                <a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram" title="Instagram"></i></a>
                <a href="https://www.youtube.com/" target="_blank" title="YouTube"><i class="fa fa-youtube-square"></i></a>
                <a href="https://twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter-square"></i></a>

            </div>
        </div>


        <div id="footer-end">
            <div class="footer-web-develop">
                <p>Copyright &copy 2022. All Right Reserved by LIBAAS.</p>
            </div>
        </div>
    </footer>

</body>

</html>

<!-- Store Info in the Database -->
