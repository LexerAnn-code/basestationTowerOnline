<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="BS.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <style>
    
         body {
            font-family: "Mitr", sans-serif;
      
        }
        <?php include 'style_1.css' ?>
  
    
    </style>



  </head>
  <body>

  
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
   
   
      <div class="nav_bar">
       
        <i class="fa fa-bars nav_btn"></i>
      </div>

      
    </div>
    
    <!-- TABLE -->
    <table style="width:35%" id="table">
    <t>

  <tr>
    <th>Serial number</th>
  
  </tr>
   <tr>
    <th>Device Type</th>
  
  </tr>
  <tr>
    <th>Transmit Power</th>
  
   <tr>
    <th>Longitude</th>
  </tr>
   <tr>
    <th>Latitude</th>


  </tr>
   <tr>
    <th>Region</th>
  
  </tr>
   <tr>
    <th>Antenna height</th>
 
  </tr>
   <tr>
    <th>Antenna height type</th>
 
  </tr>

    </t>
            <?php
    
    ?>  

</table>
     


    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>