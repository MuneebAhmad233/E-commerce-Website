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
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
    <title>Libaas </title>
    <!-- <link rel="stylesheet" href="/style/woman-category.css"> -->
    <meta  http-equiv="refresh" content="90">
    <link rel="stylesheet" href="/style/women.css">
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
                
                <a id="logo" href="" onclick="window.location.reload(true)" style="letter-spacing:1px ;"> LIBAAS </a>
                <nav id="nav-menu">
                    <ul>
                        <li class="nav-items" ><a  href="index.php">Home</a></li>
                        <li class="nav-items"><a class="men-navbar" href="men.php">Men</a></li>
                        <li class="nav-items"><a class="home1" href="women.php">Women</a></li>
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
                          
                            <!-- Mid Mag Section -->

        <section id="mid-msg">

            <article class="msg">
                <h1>Women's Collection</h1>
                <h2></h2>
            </article>
            
        </section>
        
     

        <section id="Product-Best-Sale-Section">
         
        <div class="product-container" >

        <div class="product-container" >
            <?php
    
    require_once("conn/connection.php");
    
    
    
    
    ?>
                <?php
    
                while ($row = mysqli_fetch_assoc($product_women_all)) {
    
                ?>
    
                   
    
    
                <div class="product-card"   >
                
                
                    <a href='product_desc.php?proid=<?php echo $row['product_id']?>'> <img class="product-img" src="<?php echo $row["img_file_name"] ?>">
                    </a>
    
                    <p class="product-detail">
                        <?php echo $row["product_name"] ?>
                    </p>
                    <p class="product-price">RS :&nbsp;
                        <?php echo $row["product_price"] ?>
                    </p>
                     
                </div>
                 
    
    
                <?php
    
                }
    
                ?>
    
            </div>
       
 
            </section>

<!--footer-->
<footer>
<section id="footer-top">

<section id="footer-top1">
    <div class="msg">
        <p class="p1">Never miss our updates about new </p>
        <p class="p2">Arrivals and special offers</p>
    </div>
    <div class="form">
        <form action="">
            <input type="email" class="email" placeholder="Enter Your Email here* ">
            <br>
            <input type="button" value="Subscribe Now" class="button">
        </form>
    </div>
</section>





</section>

<section id="footer-mid">
<div class="footer-items">

    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a>
    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
    <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-square"></i></a>
    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a>

</div>
</section>


<section id="footer-end">
<div class="footer-web-develop">
    <p>Copyright &copy 2022. All Right Reserved by LIBAAS.</p>
</div>
</section>

</footer>

  
</body>
</html>