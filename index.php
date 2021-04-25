<?php 
 session_start();
    session_destroy();
 
 ?>
<html>
 <head>
	<title>Master Login</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
	<body>
		<div class="container">
			<div class="login-box">
		    <div class="row">
		    	<div class="col-md-6 login-left">
		    		<div class="coverup">
		    		<h2 class="header"style="color: white"> Master Login </h2>
		    		<form action="validation.php" method="post" id="form-data">
		    			<div class="page">
		    			<div class="form-group">
		    				<div class="label" style="color: white">Username</div>
		    				<input type="text" name="user"  class="form-control" required>
		    			</div>
		    			<div class="form-group">
		    				<div class="label" style="color: white">Password</div>
		    				<input type="password" name="password"  class="form-control" required>
		    			</div>
		    			<div class="form-group">
		    				<button id="login" class="login">
	 						<a  class="login" id="login" style="color: white">Login</a></button>
		    			</div> </form>
                                           </div>
		    	               </div>
		    	    </div>		    	
		    </div>
          </div>
		</div>
		<script type="text/javascript">
	$(document).ready(function(){
	$.ajax({
		url:'validation.php',
		method:'post',
		data:$("#form-data").serialize(),success:function(response){
  $("#form-data")[0].reset();
		}
	});

 });

</script>

	</body>
</html>