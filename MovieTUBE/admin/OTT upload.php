<?php require_once("config.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="movie.css">
	<title>Image Upload in PHP and MYSQL database</title>
</head>
<body>
	<?php
		if(isset($_POST['form_submit']))
		{	
			$title=$_POST['title'];
			$sd=$_POST['sd'];
			$ld=$_POST['ld'];
			$launguage=$_POST['launguage'];
			$CDFC=$_POST['CDFC'];
			$platform=$_POST['platform'];
			$song_link=$_POST['song_link'];
			$movie_link=$_POST['movie_link'];
$folder = "uploads98/";
$image_file=$_FILES['image']['name'];
 $file = $_FILES['image']['tmp_name'];
 $path = $folder . $image_file;  
 $target_file=$folder.basename($image_file);
 $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
//Allow only JPG, JPEG, PNG & GIF etc formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
}
//Set image upload size 
    if ($_FILES["image"]["size"] > 1048576) {
   $error[] = 'Sorry, your image is too large. Upload less than 1 MB KB in size.';
}
if(!isset($error))
{
	// move image in folder 
move_uploaded_file($file,$target_file); 
$result=mysqli_query($db,"INSERT INTO otts(image,title,sd,ld,launguage,CDFC,platform,song_link,movie_link) VALUES('$image_file','$title','$sd','$ld','$launguage','$CDFC','$platform','$song_link','$movie_link')"); 
if($result)
{
	header("location:ott's.php?image_success=1");
}
else 
{
	echo 'Something went wrong'; 
}
}
		}
if(isset($error)){ 

foreach ($error as $error) { 
	echo '<div class="message">'.$error.'</div><br>'; 	
}
}
	?> 
	<div class="container">
<form action="" method="POST" enctype="multipart/form-data">
	<label>Image </label>
	<input type="file" name="image" class="form-control" required >
	<label>Title</label>
	<input type="text" name="title" class="form-control"required>
	<label>Short Discription</label>
	<input type="text" name="sd" class="form-control"required>
	<label>Long Discription</label>
	<input type="text" name="ld" class="form-control"required>
	<label>Song Link</label>
	<input type="text" name="song_link" class="form-control"required>
	<label>Movie Link</label>
	<input type="text" name="movie_link" class="form-control"required>

	<label>launguage</label>
	<select name="launguage" class="form-control">
    <option value="English">English</option>
    <option value="Hindi">Hindi</option>
    <option value="Marathi">Marathi</option>
    <option value="kanada">Kanada</option>
	<option value="Gujrathi">Gujrathi</option>
	</select>

	<label>CBFC</label>
	<select name="CDFC" class="form-control">
    <option value="U">U</option>
    <option value="A">A</option>
    <option value="U/A">U/A</option>
    <option value="18+">18+</option>
	<option value="S">S</option>
	</select>

	<label>Platform</label>
	<select name="platform" class="form-control">
    <option value="Netflix">Netflix</option>
    <option value="Disney+ Hotstar">Disney+ Hotstar</option>
    <option value="Amazon Prime">Amazon Prime</option>
    <option value="Eros Now">Eros Now</option>
	<option value="MX Player">MX Player</option>
	</select>



	<br><br>
	<button name="form_submit" class="btn-primary"> Upload</button>
</form>
</div>
</body>
</html>