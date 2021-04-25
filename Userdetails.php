<!DOCTYPE html>
<html>
<head>
	<title>Client Information</title> 
	<style>
	
	
         .connect_btn{
             padding: 7px;
             background: #151E3D;
             text-decoration: none;
             font-size: 18px;
             font-weight: 600;
             transition: 0.5s;
             transition-property: background;
			 border-radius: 05px;
			 box-shadow: 1px 1px 2px 1px grey;
			 color: white;
			 margin:0 50%;
			 position:relative;
			 left:-50px;
			 bottom: -400px;
                } 

      .connect_btn:hover{
             background: #0B87A6;
                      }
		input{
			width:20%;
			height: 5%;
			border:1%;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
			background-color: #151E3D;
			color: white;
		}
		table,th,td{
			border:2px solid black;
			width:1300px;
			background-color:#151E3D;
			text-align: center;
			color: white;
		}

	</style>
</head>
<body>
	
    <div class="center_area">
        <a href="#" class="connect_btn">Connect</a>
      </div>
<center>
	<h1 style="color: white">Enter Client Username To Display Information </h1>
	<form action="" method="POST">
		<input type="text" name="name" placeholder="Enter Client Username"/><br/>
		<input type="submit" name="search" value="Request Client Info">
	</form>
	<table>
		<tr>		
<th>Name</th>
<th>Manufacturer ID</th>
<th>Model ID</th>
<th>Serialnumber</th>
<th>Devicetype</th>
<th>Longitude</th>
<th>Latitude</th>
<th>Region</th>
<th>District</th>

		</tr><br>	
	<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'userregistration');
if(isset($_POST['search'])){
	$id=$_POST['name'];
	$query="SELECT * FROM usertable where name='$id'";
	$query_run=mysqli_query($connection,$query);
	while($row=mysqli_fetch_array($query_run)){
		?>
		<tr>
			<td>  <?php echo $row['name'];?></td>
			<td>  <?php echo $row['manufacturerid'];?></td>
			<td>  <?php echo $row['modelid'];?></td>
			<td>  <?php echo $row['serialnumber'];?></td>
			<td>  <?php echo $row['devicetype'];?></td>
			<td>  <?php echo $row['longitude'];?></td>
			<td>  <?php echo $row['latitude'];?></td>
			<td>  <?php echo $row['region'];?></td>
			<td>  <?php echo $row['district'];?></td>
			

			     </tr>
			<?php



	}
}


	 ?>
	 </table>
</center>
</body>
</html>