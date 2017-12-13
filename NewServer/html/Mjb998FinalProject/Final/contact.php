<?php include("include/loginheader.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include("include/header.php"); ?>
    <script>
      $(function(){
        $("#accordion").accordion();
      });
    </script>
  </head>

  <body>

    <div class="container">
    <?php include("include/navbar.php"); ?>

      <div class="featured">
        <h2>Contact</h2>
        
      </div>


      <div class="row-fluid">
        <p>Have a question about the procedure or the location of the business? If you have any questions or comments, then feel free to e-mail or call using any of the information below. You will get a response as quickly as possible.</p>
        <p>Dr. O'Young</p>
        <div id="accordion">
          <h3>Owner</h3>
          <div>Dr. Lorna O'Young</div>
          <h3>Phone Number</h3>
          <div>618-236-7555</div>
          <h3>Email Address:</h3>
          <div>LornaLaser@gmail.com</div>
        </div>
      
      </div>
     
      <hr>

      <?php include("include/footer.php"); ?>

    </div> <!-- /container -->

  </body>
</html>
