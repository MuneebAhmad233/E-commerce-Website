<?php
session_start();
$cart =  $_SESSION['cart'];

 
$count = count($cart);
?>
<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
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



    <title></title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    </head>

    <body>
       
        
        
    <section id="header">
            <section id="top-msg">
                <h3>
                    Free Delivery Over 3000 &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; <a href="a.php">Free
                        Return</a>
                </h3>
            </section>
            <section id="navbar">

                <a id="logo" href="" onclick="window.location.reload(true)" style="letter-spacing:1px ;"> LIBAAS </a>
                <nav id="nav-menu">
                    <ul>
                        <li class="nav-items"><a class="home1" href="index.php">Home</a></li>
                        <li class="nav-items"><a href="men.php">Men</a></li>
                        <li class="nav-items"><a href="women.php">Women</a></li>
                        <li class="nav-items"><a href="about.php">About</a></li>

                    </ul>
                    <div class="nav-right">
                    <li class="nav-items" id="Nav-cart"><a href="cart.php"><i class='bi bi-bag icon-large' title="cart"></i><span><?php  echo $count
                        ?></span></a></li>
                    </div>
                     

                </nav>

            </section>

        </section>

        <main>
            
        </main>
        
    </body>
</html>