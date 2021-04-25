<?php
	$old_path=getcwd();
    chdir('MS');
       $fn = "status.php"; 
      $file = fopen($fn, "w+"); 
      $size = filesize($fn); 
      $text = fread($file, 2);
      fwrite($file, "0" );
      chdir($old_path);
    
header('location:index.php');


?>