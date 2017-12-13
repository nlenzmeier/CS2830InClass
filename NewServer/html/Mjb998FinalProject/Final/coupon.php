<?php include("include/loginheader.php"); ?>
<?php

if (!isset($_SESSION['login'])){
      header("Location: index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include("include/header.php"); ?>
   </head>

        <style>
        #Wrapper {
            
            padding: 20px;
            width: 940px;
            min height:250px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
        }
        #loadingDiv{
            display: none;
        }
        
        
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<script>
	
            //------------Coupon 1 Deal ---------------
            
        function getCoupon1() {
            // Loading feedback
            document.getElementById("contentBox").innerHTML = "Loading...";
            
            
            var xmlHttp = new XMLHttpRequest();
            
            xmlHttp.onload = function() {
                if (xmlHttp.status == 200) {
                    var contentBox = document.getElementById("contentBox");
                    
                    // Get the response text
                    var response = xmlHttp.responseText;
                    
                    // This prints the JSON string
                    console.dir(response);
                    
                    // JSON.parse converts the JSON string into a JavaScript object
                    response = JSON.parse(response);
                    
                    // This prints our object
                    console.dir(response);
                    
                    // And we can use the object like so:
                    contentBox.innerHTML = response.deal + " Expires on " + response.expires;
                }
            };
            
            xmlHttp.open("GET", "jsoncoup1.php", true);
            xmlHttp.send();
            
        }
            
            //---------Special Deal----------------
            
            function getSpec() {
            // Loading feedback
            document.getElementById("contentBox").innerHTML = "Loading...";
            
            
            var xmlHttp = new XMLHttpRequest();
            
            xmlHttp.onload = function() {
                if (xmlHttp.status == 200) {
                    var contentBox = document.getElementById("contentBox");
                    
                    // Get the response text
                    var response = xmlHttp.responseText;
                    
                    // This prints the JSON string
                    console.dir(response);
                    
                    // JSON.parse converts the JSON string into a JavaScript object
                    response = JSON.parse(response);
                    
                    // This prints our object
                    console.dir(response);
                    
                    // And we can use the object like so:
                    contentBox.innerHTML = response.deal + " Expires on " + response.expires;
                }
            };
            
            xmlHttp.open("GET", "jsonspec.php", true);
            xmlHttp.send();
            
        }
            
            //----------Coupon 2 inforomation
            
        function getCoupon2() {
            // Loading feedback
            document.getElementById("contentBox").innerHTML = "Loading...";
            
            
            var xmlHttp = new XMLHttpRequest();
            
            xmlHttp.onload = function() {
                if (xmlHttp.status == 200) {
                    var contentBox = document.getElementById("contentBox");
                    
                    // Get the response text
                    var response = xmlHttp.responseText;
                    
                    // This prints the JSON string
                    console.dir(response);
                    
                    // JSON.parse converts the JSON string into a JavaScript object
                    response = JSON.parse(response);
                    
                    // This prints our object
                    console.dir(response);
                    
                    // And we can use the object like so:
                    contentBox.innerHTML = response.deal + " Expires on " + response.expires;
                }
            };
            
            xmlHttp.open("GET", "jsoncoup2.php", true);
            xmlHttp.send();
            
        }
	
	</script>
    
  <body>

<div class="container">
     <?php include("include/navbar.php"); ?>
    </div>
    <!-- Example row of columns -->
      <div class="featured">
        <h2>Special Deals!</h2>
        <p>Below are some special deals, click on the button to view.</p>
      </div>
<div class="container">
        <div id="Wrapper">

            <button onclick="getCoupon1()">Coupon 1</button>
            <button onclick="getSpec()">Monthly Special</button>
            <button onclick="getCoupon2()">Coupon 2</button>

            <ul id="contentBox"></ul>
            <div id="loadingDiv">Loading...</div>

        </div>
      </div>
      <hr>


      <?php include("include/footer.php"); ?>


    </div> <!-- /container -->

  </body>
