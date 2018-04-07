<?php
session_start();
 $link=mysqli_connect("localhost","root","","login_agro");
    
?>
<html>
 <head>
     <link rel="stylesheet" type="text/css" href="agro_web_css.css">
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
        
        
        <div class="para1">
            <div class="fixed-top head">
                <img src="pics/leaf.svg" id="logo" alt=""><span id="agro_text">AGRO</span>
 
            <div class="sign_in ">
         <a class="log_text">Welcome&nbsp; <?php
    $id=$_SESSION['id'];
     $query="SELECT * FROM register_agro WHERE 
     id='$id'";
        
$ans=mysqli_query($link,$query);
        $row = mysqli_fetch_array($ans);
    echo ucfirst($row['name']);
    ?></a>
             
                </div>
            </div>
            
            <nav class="navbar navbar-toggleable-md navbar-default fixed-top navbar-light" id="nav">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li>
        <a class="nav-link" href="#"><span class="nav_text">Home </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><span class="nav_text">Seeds</span></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#"><span class="nav_text">Crops </span></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#"><span class="nav_text">Vegetables</span></a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="#"><span class="nav_text">Contact Us</span></a>
      </li>
    </ul>           
                </div></nav> 
           
           
            
            <h2 id="caption">Buying and Selling of agricultutral Produts at one place ....</h2>
        </div>
   
        <div class="container contain1">
             
            <h2> Products in which we Indulge In</h2>
        <br>
           <div class="row cards">
  <div class="col-sm-3">
      
            <div class="card" style="width: 15rem;">
                <a href="grains.php">
  <img class="card-img-top" src="pics/seeds.jpg" alt="Card image cap">
                 </a>
  <div class="card-block">
    <h4 class="card-title">Grains</h4>
      
      </div>
      </div>
         </div>
                 <div class="col-sm-3">
                <div class="card" style="width: 15rem;">
                     <a href="fruit.php">
  <img class="card-img-top" src="pics/fruit.jpg" alt="Card image cap">
                    </a>
  <div class="card-block">
    <h4 class="card-title">Fruits</h4>
      <p class="card-text"></p>
  </div>
</div>
                </div>
                     
                
                 <div class="col-sm-3">
                <div class="card" style="width: 15rem;">
                     <a href="crops.php">
  <img class="card-img-top" src="pics/crops.jpg" alt="Card image cap">
                    </a>
  <div class="card-block">
    <h4 class="card-title">Crops</h4>
      <p class="card-text"></p>
  </div>
</div>
                </div>       
               
                    <div class="col-sm-3">
                <div class="card" style="width: 15rem;">
                     <a href="vegetable.php">
  <img class="card-img-top" src="pics/vege.jpg" alt="Card image cap">
                    </a>
  <div class="card-block">
    <h4 class="card-title">Vegetables</h4>
      <p class="card-text"></p>
  </div>
</div>
                </div> 
            </div>
        </div>
        <br>
    <div class="jumbo">
        <div class="container foot">
            <div class="col">
                 <h6>PRODUCT</h6>
                 <div class="small">
                Bussiness<br>
                Comapre<br>
                Features<br>
                Mobile<br>
                App Showcase<br>
                Contact Us<br>
                 </div>
            </div>
             <div class="col">
                <h6>COMPANY</h6>
                 <div class="small">
                About Us<br>
                Blog<br>
                News<br>
                press Releases<br>
                Jobs<br>
                Contact Us<br>
                 </div>
            </div>
             <div class="col">
                <h6>LEARN MORE</h6>
                 <div class="small">
                Support<br>
                Developers<br>
                reseller Program<br>
                 </div>
            </div>
             <div class="col">
                 <h6>CONNECT WITH US</h6>
                 <div class="row">
                 <div class="col-sm-6">
                     <img src="pics/facebook.png">
                     </div>
                     <div class="col-sm-6">
                     <img src="pics/twi.png">
                     </div>
                 </div>
                    <div class="row">
                 <div class="col-sm-6">
                     <img src="pics/whatsapp.png">
                     </div>
                     <div class="col-sm-6">
                     <img src="pics/linked.png">
                     </div>
                 </div>
                    <div class="row">
                 <div class="col-sm-6">
                     <img src="pics/mail.png">
                     </div>
                     <div class="col-sm-6">
                     <img src="pics/git.png">
                     </div>
                 </div>
                 
            </div>
            <p class="small"><span id="foot_text">Copyright © 2014-2017 Agriculture, All rights reserved.</span> </p>
        </div>
        
        </div>
            
           <!--  <div class="carousel">
    <a class="carousel-item" href=""><img src="seeds.jpg"></a>
    <a class="carousel-item" href=""><img src="vege.jpg"></a>
    <a class="carousel-item" href=""><img src="crop2.jpg"></a>
    <a class="carousel-item" href=""><img src="crops.jpg"></a>
    <a class="carousel-item" href=""><img src="fruit.jpg"></a>
  </div>
            -->
        
        
      
           
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        
      <!--  <script>
             $(document).ready(function(){
      $('.carousel').carousel({duration:15});
    });
        </script>-->
        
        <script>
               $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 380) { // check if user scrolled more than 50 from top of the browser window
          $(".fixed-top").css("background-color", "#007192"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".fixed-top").css("background-color", "transparent"); // if not, change it back to transparent
        }
      });
    });
            
        </script>
       
       </body>
</html>