
<?php

session_start();


include 'validation.php';

global $var,$output,$w,$dd,$modelId,$region,$district,$longitude,$latitude;
$GLOBALS['var']!="Y";
$output=$_SESSION['output'];

$resp = json_decode($output);
$w =  $resp->data->serialNumber;
$dd=$resp->data->deviceId;
$modelId=$resp->data->modelId;
$manufacturerId=$resp->data->manufacturerId;
$region=$resp->data->region;
$district=$resp->data->district;
$operator=$resp->data->operator;
$longitude=$resp->data->longitude;
$latitude=$resp->data->latitude;
$transmission_power=$resp->data->transmitter_power;


//echo $str;
 //echo "string  $first_line";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
   
    <link href="BS.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <style>
  table {
    color:black;
  
margin-top:250px;
 margin-left:800px;
 transform: translate(-50%,-50%);
 width: 60%; 
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 10px 10px 10px 10px;

 

  }

    
  td,th{
    padding: 10px 10px;
 text-align: center;
 border: 1px solid black;
  }
  tr{
 width: 100%;
 background-color: white;
 color:"black"
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: white;
}
th{
 background-color: #2f323a;
 color: #fafafa;
 font-family: 'Montserrat',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
@media screen and (max-width: 780px){
table{
  margin-top:250px;
 margin-left:200px;
}
}
 
</style>
  </head>
  <body>
<div class="tableClass">
  <table>
    <td>
     
    <tr>
    <th>Serial Number</th>
   <td>  <?php 
         echo $w;           
          
?></td>
  <tr>
    <th>Device ID</th>
   <td>  <?php 
   echo $dd;
?></td>
  </tr>
   <tr>
    <th>Model Id</th>
   <td>  <?php 
   echo $modelId
?></td>
  </tr>
  <tr>
    <th>manufacturer Id</th>
   <td>  <?php 
    echo $manufacturerId
?></td>
   <tr>
    <th>Longitude</th>
  <td>  <?php 
  echo $longitude
?></td>
  </tr>
   <tr>
    <th>Latitude</th>
  <td>  <?php 
   echo $latitude
?></td>
  </tr>
   <tr>
    <th>Region</th>
   <td>  <?php 
   echo $region
?></td>
  </tr>
   <tr>
    <th>District</th>
  <td>  <?php 
   echo $district
?></td>
  </tr>
   <tr>
    <th>Transmitter_power</th>
  <td> 
     <?php 
  echo $transmission_power
?>W</td>
  </tr>

    </t>
            <?php
    
    ?>  

</table>
</div>
  
  <script>
  
  </script>

    <input type="checkbox" id="check">
  
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Base <span>Station</span></h3>
        
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <div class="mobile_nav">
      <div class="nav_bar">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      
    </div>
    <div class="sidebar">
      <div class="profile_info">
        <img src="online.gif" class="profile_image" alt="" style="width:98px;height:98px;">
       
        
      </div>
     
      <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="#"><i class="fas fa-cogs"></i><span>Validated Devices </span></a>
      <a href="#"><i class="fas fa-table"></i><span>Connected Devices</span></a>
  
    </div>

    <div class="content">
      <div class="card">
        
      </div>
      <div class="card">
        
      </div>
      <div class="card">
        
      </div>
      </div>
    

  
  </body>
</html>