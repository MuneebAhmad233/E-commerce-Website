
 <?php
session_start();

echo "hello";
if(isset($_GET['proid']))
{
    if(isset($_GET['quantity'])){
        $quantity = $_GET['quantity'];
    }
    if(isset($_GET['SELECTSIZE'])){
        $size = $_GET['SELECTSIZE'];
    }
     $id = $_GET['proid'];

     $_SESSION['cart'][$id] =array('quantity' => $quantity , 'SELECTSIZE'=>$size);
       header('location:cart.php');
    

   echo '<pre>';
   print_r($_SESSION['cart']);
   echo '</pre>';

}

?> 