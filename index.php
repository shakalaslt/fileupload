<?php
if ($_FILES["image"]["size"] > 1000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if($image != "jpg" && $image != "png" && 
 $image != "gif" ) {
    echo "Sorry, only JPG, PNG & GIF files are allowed.";
    $uploadOk = 0;
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
	          
		
	        </div>
	        <div class="col">
	           <h2>Debug</h2>
	           <pre>
	            <?php print_r($_FILES['image']); ?> 
	            </pre>
		        
	        </div>
	    </div>
	