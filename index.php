<?php
   if(isset($_FILES['image'])){
   	  $max_size = 1024;
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $err="";
     
   
      
      $expensions= array("jpeg","jpg","png");
       $file_ext=explode('.',$_FILES['image']['name'])[1];
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 1024){
         $errors[]='File size must be exactely 1 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
      else {
      	$err= "File is larger" . $max_size "B";

      }
   }



?>




<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row head">
			<h1>File Upload</h1>
		</div>
	</div>
	<div class="container">
	    <div class="row">
	        <div class="col">
	            <h2>Upload Form</h2>
	        <form  method="post" enctype="multipart/form-data">
                Pasirinkti failą:
                <input type="file" name="image" id="image">
                <input type="submit" value="Įkelti" name="submit">
            </form>
            <?php
            if ($err){
            	echo "Error";
            }
            ?>
	          
		
	        </div>
	        <div class="col">
	           <h2>Debug</h2>
	           <pre>
	            <?php print_r($_FILES['image']); ?> 
	            </pre>
		        
	        </div>
	    </div>
	