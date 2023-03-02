
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/style/shipping-form.css">
    
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

        
        
    <section id="header">
            <section id="top-msg">
                <h3>
                    Free Delivery Over 3000 &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; <a href="return_policy.html">Free
                        Return</a>
                </h3>
            </section>
            <section id="navbar">

                <a id="logo" href="" style="letter-spacing:1px ;"> LIBAAS </a>
                <nav id="nav-menu">
                    <ul>
                        <li class="nav-items"><a class="home1" href="index.php">Home</a></li>
                        <li class="nav-items"><a href="men.php">Men</a></li>
                        <li class="nav-items"><a href="women.php">Women</a></li>
                        <li class="nav-items"><a href="about.php">About</a></li>

                    </ul>
                    <div class="nav-right">
                        <li class="nav-items" id="Nav-cart"><a href="cart.html"><i class='bi bi-bag icon-large'></i></a></li>


                    </div>
                    <div class="menu-bar">

                        <i class="fa fa-bars" aria-hidden="true"></i>

                    </div>

                </nav>

            </section>

        </section>

    </header>
    <main>
        <div class="heading" >
            <h2>
                
            Shipping
                
            </h2>
        </div> 

        <div class="container">
         
        <p>Please enter your shipping details.</p>
        <hr />

        <form action="ship_info_con.php" method="post" >

        <div class="form" >
          
        <div class="fields fields--2">

          <label class="field">

            <span class="field__label" for="firstname">First name</span>

            <input class="field__input" type="text" id="firstname" value="" name="firstname" required/>

          </label>
          <label class="field">
            <span class="field__label" for="lastname">Last name</span>
            <input class="field__input" type="text" id="lastname" value="" name="lastname"required/>
          </label>

        </div>
        <label class="field">
          <span class="field__label" for="address">Address</span>
          <input class="field__input" type="text" id="address" name="address"required />
        </label>
       
        <label class="field">
            
            <span class="field__label" for="PhoneNo">Phone No</span>
            <input class="field__input" type="text" id="PhoneNo" name="PhoneNo"required/>

          </label>
          <div class="radio">

              <input type="radio" checked>
              <p>Cash on Delivery</p>
          
            </div>

        </div>
        <hr>
        <input class="button" type="submit"></input>

        </form>
      </div>



    </main>
</body>
</html>

