<?php
session_start();
if(isset($_GET["text1"]))
{
$str=$_GET["text1"];

$str1=explode(" ",$str);
  $qty=$str1[0];
    $item=$str1[1];
    $price=$str1[2];

$link1=mysqli_connect("localhost","root","","cart");
if(mysqli_connect_error()){
    die( "there is connection error");
}

$id=$_SESSION['id'];

$query="SELECT * FROM cart_items WHERE id='$id' AND item_name='$item'";
    
$ans=mysqli_query($link1,$query);
//$row = mysqli_fetch_array($ans);
    if(mysqli_num_rows($ans)>0 && $qty!=0)
    {
        $query="UPDATE `cart_items` SET qty='$qty' WHERE id='$id' AND item_name='$item'";
         mysqli_query($link1,$query);
    
    }

    else{
    /*$query="UPDATE `products` SET qty='$qty' WHERE id='$index'";
    mysqli_query($link,$query);*/
     if($qty!=0)
    {
    $query1="INSERT INTO `cart_items`(`id`,`item_name`,`price`,`qty`) VALUES('$id','$item','$price','$qty')";

   mysqli_query($link1,$query1);
     }
    }
}
//$ans=$_GET['bottle_gourd 30 8'];
//echo $ans;
    
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="grains.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
        .para{
         height: 450px; 
        background: url(pics/federico-respini-314377.jpg);
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
     background-size: cover;
}
         img
         {
              transition: 0.3s ease;
         }
         img:hover{
         transform: scale(1.1);
         }
    </style>
    </head>
    <body>
    
        <div class="fixed-top head">
                <img src="pics/leaf.svg" id="logo" alt=""><span id="agro_text">AGRO</span>
 
            
          
             
             <div class="sign_in "> 
                 <b> My Cart</b>
         <a class="log_text" href="cart.php"><img src="pics/cart1.png"width="40px" height="40px"></a>
                </div>
            </div>
            
            <nav class="navbar navbar-toggleable-md navbar-default fixed-top navbar-light" id="nav">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li>
        <a class="nav-link" href="agro_web.php"><span class="nav_text">Home </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fruit.php"><span class="nav_text">Fruits</span></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="grains.php"><span class="nav_text">Grains </span></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="vegetable.php"><span class="nav_text">Vegetables</span></a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="#"><span class="nav_text">Contact Us</span></a>
      </li>
    </ul>           
                </div></nav> 
           
        <div class="para">
          <!--  <h2 id="caption">Buy Grains</h2>-->
        </div>
        
        <div class="container">
            <h2 id="grain_text">Fruits</h2>
            <hr>
            
            <div class='box'>
                <div class="items">
                <img src="pics/apple.jpg" class="items">
            </div>
                <div class="desc">
                <h5>Apple</h5>
                <h6>Rs.80/Kg</h6>
                </div>
            <div class="desc">
                <h6>Qty</h6>
                <input type="number" min="0" id="qty1"  value=0>
                </div>
            <div class="desc">
                 <button type="button" class="btn btn-success" onclick="on()" id="apple 80 1">Buy Now</button>
            </div>
            </div>
            
            <div class="hr1"></div>
            
            <div class='box'>
             <div class="items">
                <img src="pics/mango.jpg" class="items">
            </div>
                <div class="desc">
                <h5>Mango</h5>
                <h6>Rs.60/Kg</h6>
                </div>
            <div class="desc">
                <h6>Qty</h6>
                <input type="number" min="0" id="qty2"  value=0>
                </div>
            <div class="desc">
                 <button type="button" class="btn btn-success" onclick="on()" id="mango 60 2">Buy Now</button>
            </div>
            </div>
            
            <div class="hr2"></div>
            
            <div class='box'>
                <div class="items">
                <img src="pics/kiwi.jpg" class="items">
            </div>
                <div class="desc">
                <h5>kiwi</h5>
                <h6>Rs.20/pcs</h6>
                </div>
            <div class="desc">
                <h6>Qty</h6>
                <input type="number" min="0" id="qty3"  value=0>
                </div>
            <div class="desc">
                 <button type="button" class="btn btn-success" onclick="on()" id="kiwi 20 3">Buy Now</button>
            </div>
            </div>
            
            <div class="hr1"></div>
            
            <div class='box'>
             <div class="items">
                <img src="pics/watermelon.jpg" class="items">
            </div>
                <div class="desc">
                <h5>Watermelon</h5>
                <h6>Rs.30/Kg</h6>
                </div>
            <div class="desc">
                <h6>Qty</h6>
                <input type="number" min="0" id="qty4"  value=0>
                </div>
            <div class="desc">
                 <button type="button" class="btn btn-success" onclick="on()" id="watermelon 30 4">Buy Now</button>
            </div>
            </div>
            
            
            <div class="hr2"></div>
            
            <div class='box'>
                <div class="items">
                <img src="pics/banana.jpg" class="items">
            </div>
                <div class="desc">
                <h5>Banana</h5>
                <h6>Rs.60/Kg</h6>
                </div>
            <div class="desc">
                <h6>Qty</h6>
                <input type="number" min="0" id="qty5"  value=0>
                </div>
            <div class="desc">
                 <button type="button" class="btn btn-success" onclick="on()" id="banana 60 5">Buy Now</button>
            </div>
            </div>
            
            <div class="hr1"></div>
            
            <div class='box'>
             <div class="items">
                <img src="pics/orange.jpg" class="items">
            </div>
                <div class="desc">
                <h5>Orange</h5>
                <h6>Rs.40/Kg</h6>
                </div>
            <div class="desc">
                <h6>Qty</h6>
                <input type="number" min="0" id="qty6"  value=0>
                </div>
            <div class="desc">
                 <button type="button" class="btn btn-success" onclick="on()" id="orange 40 6">Buy Now</button>
            </div>
            </div>
            
            
            <div class="hr2"></div>
            
            <div class='box'>
                <div class="items">
                <img src="pics/grapes.jpg" class="items">
            </div>
                <div class="desc">
                <h5>Grapes</h5>
                <h6>Rs.40/Kg</h6>
                </div>
            <div class="desc">
                <h6>Qty</h6>
                <input type="number" min="0" id="qty7"  value=0>
                </div>
            <div class="desc">
                 <button type="button" class="btn btn-success" onclick="on()" id="grapes 40 7">Buy Now</button>
            </div>
            </div>
            
            <div class="hr1"></div>
            
            <div class='box'>
             <div class="items">
                <img src="pics/papaya.jpg" class="items">
            </div>
                <div class="desc">
                <h5>Papaya</h5>
                <h6>Rs.20/Kg</h6>
                </div>
            <div class="desc">
                <h6>Qty</h6>
                <input type="number" min="0" id="qty8"  value=0>
                </div>
            <div class="desc">
                 <button type="button" class="btn btn-success" onclick="on()" id="papaya 20 8">Buy Now</button>
            </div>
            </div>
            
        </div>
           
           <div id="overlay" >
  <div id="text" >
      <p>Product Details</p>
      <hr>
      <img src=" " id="image" height="100px" width="100px">
      <div>
          <br>
        <h6 id="info" name="info"></h6>
          <h6 id="rupe"></h6>
          <h6 id="qtty"></h6>
      </div>
      <hr>
      <span class="shopping" id="shop" onclick="off()">Proceed to Shopping!</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span class="shopping" id="shop" onclick="closed()">Close</span> 
            </div>
</div>
       
            <form method="get" id="jsform">
                <input type="hidden" id="text1" name="text1">
            </form>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        
         <script src='products.js'></script>
        
    </body>
</html>