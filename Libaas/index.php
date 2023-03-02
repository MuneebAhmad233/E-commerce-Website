

<!DOCTYPE html>
<html lang="en">

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



    <title>Libaas </title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>

    <!-- Header Section -->

    <header>

        <?php
        
        include("menu-bar.php");

        ?>

    </header>

    <!-- Mid Mag Section -->

    <section id="mid-msg">

        <article class="msg">
            <h1>Sustainable. Beautiful. Ethical.</h1>
        </article>

    </section>




    <section class="shop_button">
        <div class="btn">

            <a href="#Product-Best-Sale-Section">Shop Now</a>

        </div>
    </section>


    <!-- Product Category Section -->


    <section id="Category">
        <div class="category-image">


            <div class="a">


                <a href="women.php">


                    <div class="category-name">

                        <h3>
                            Women
                        </h3>

                    </div>
                    <div class="image-sec">

                        <div class="img">

                            <img src="image/woman-main.jpg" alt="retry">

                        </div>

                    </div>
                </a>
            </div>
        </div>
        <div class="category-image">
            <div class="a">

                <a href="men.php">
                    <div class="category-name">
                        <h3>
                            Men
                        </h3>
                    </div>
                    <div class="image-sec">

                        <div class="img">

                            <img src="image/man-main.jpg" alt="retry">
                        </div>


                    </div>
                </a>

            </div>


        </div>

    </section>

    <!-- Product Sale Section -->

    <section id="Product-Best-Sale-Section">
        <h2>Best Selling</h2>
        <div class="product-container" >
        <?php

require_once("conn/connection.php");





?>
            <?php

            while ($row = mysqli_fetch_assoc($product_women_4)) {

            ?>

               


            <div class="product-card"   >
        
            <form action="post" >

                <a href='product_desc.php?proid=<?php echo $row['product_id']?>'> <img class="product-img" src="<?php echo $row["img_file_name"] ?>">
                </a>
                

                <p class="product-detail">
                    <?php echo $row["product_name"] ?>
                </p>
                <p class="product-price">RS :&nbsp;
                    <?php echo $row["product_price"] ?>
                </p>

                </form>
                 
            </div>
             


            <?php

            }

            ?>


<!-- Men Section display -->


<?php

            while ($row = mysqli_fetch_assoc($product_men_4)) {

            ?>

               


            <div class="product-card"   >
            
            
                <a href='product_desc.php?proid=<?php echo $row['product_id']?>'>
                 <img class="product-img" src="<?php echo $row["img_file_name"] ?>">
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



    <!-- Footer Section -->



    <footer>
        <?php

        include("footer.php");

        ?>

    </footer>

    <script>



    </script>



</body>

</html>