<html>
<head>
    <link rel="stylesheet" type="text/css" href="seed.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
    
        <div class="fixed-top head">
                <img src="pics/leaf.svg" id="logo" alt=""><span id="agro_text">AGRO</span>
 
            
          
             
             <div class="sign_in ">
         <a class="log_text">Log In</a>
                /
      <a class="log_text">Sign In</a>
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
        <a class="nav-link" href="#"><span class="nav_text">Grains </span></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#"><span class="nav_text">Vegetables</span></a>
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
            <h2 id="grain_text">Grains</h2>
            <div class="box">
                <img src="pics/wheat.jpg" class="img">
                <div class="grains_left">
                 <h5>Wheat  &nbsp;&nbsp;&nbsp;&nbsp;Qty</h5>
                     <p>Rs.12/Kg&nbsp;&nbsp;&nbsp;<input type="number" min="0"></p>
                </div>
                <div class="buy">
                    <!--<a href="login.php">-->
                        <button type="button" class="btn btn-success" onclick="on()">Buy Now</button>
                </div>
            </div>
            
            <div class="box">
                <img src="pics/rye.jpg" class="img">
                 <div class="grains_left">
                     <h5>Rye  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qty</h5>
                     <p>Rs.13/Kg&nbsp;&nbsp;&nbsp;<input type="number" min="0"></p>
                      </div>
                
                <div class="buy">
                   <button type="button" class="btn btn-success">Buy Now</button>
                </div>    
            </div>
            
            <div class="box">
                <img src="pics/barley.jpg" class="img">
                 <div class="grains_left">
               <h5>Barley  &nbsp;&nbsp;&nbsp;&nbsp;Qty</h5>
                     <p>Rs.12/Kg&nbsp;&nbsp;&nbsp;<input type="number" min="0"></p>
                      </div>
                <div class="buy">
                   <button type="button" class="btn btn-success">Buy Now</button>
                </div>
            </div>
            <div class="box">
                <img src="pics/oats.jpg" class="img">
                 <div class="grains_left">
                <h5>Oats  &nbsp;&nbsp;&nbsp;&nbsp;Qty</h5>
                     <p>Rs.15/Kg&nbsp;&nbsp;&nbsp;<input type="number" min="0"></p>
                      </div>
                <div class="buy">
                   <button type="button" class="btn btn-success">Buy Now</button>
                </div>
            </div>
            <div class="box">
                <img src="pics/rice.jpg" class="img">
                 <div class="grains_left">
                <h5>Rice  &nbsp;&nbsp;&nbsp;&nbsp;Qty</h5>
                     <p>Rs.11/Kg&nbsp;&nbsp;&nbsp;<input type="number" min="0"></p>
                      </div>
                <div class="buy">
                   <button type="button" class="btn btn-success">Buy Now</button>
                </div>
            </div>
            <div class="box">
                <img src="pics/maize.jpg" class="img">
                 <div class="grains_left">
                <h5>Maize &nbsp;&nbsp;&nbsp;&nbsp;Qty</h5>
                     <p>Rs.16/Kg&nbsp;&nbsp;&nbsp;<input type="number" min="0"></p>
                      </div>
                <div class="buy">
                   <button type="button" class="btn btn-success">Buy Now</button>
                </div>
            </div>
            
             <div class="box">
                <img src="pics/bazra.jpg" class="img">
                 <div class="grains_left">
               <h5>bajra &nbsp;&nbsp;&nbsp;&nbsp;Qty</h5>
                     <p>Rs.16/Kg&nbsp;&nbsp;&nbsp;<input type="number" min="0"></p>
                      </div>
                <div class="buy">
                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bajra_modal">Buy Now</button>
                </div>
            </div>
            
             <div class="box">
                <img src="pics/jowar.jpg" class="img">
                 <div class="grains_left">
               <h5>Jowar  &nbsp;&nbsp;&nbsp;&nbsp;Qty</h5>
                     <p>Rs.20/Kg&nbsp;&nbsp;&nbsp;<input type="number" min="0"></p>
                      </div>
                <div class="buy">
                   <button type="button" class="btn btn-success">Buy Now</button>
                </div>
            </div>
            
            </div>
        
        <div id="overlay">
            <div id="text">hello</div>
        </div>
    
        <div class="modal fade" id="bajra_modal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        
         <script>
               $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 320) { // check if user scrolled more than 50 from top of the browser window
          $(".fixed-top").css("background-color", "	 #99ccff"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".fixed-top").css("background-color", "transparent"); // if not, change it back to transparent
        }
      });
    });
             
              $(".img").hover(function(){
                $(this).css("opacity","0.7");
                
            },function(){
                  $(this).css("opacity","1");
            });
            
             
             
function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}
             
        </script>
        
    </body>
</html>