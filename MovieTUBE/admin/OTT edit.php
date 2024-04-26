<?php require_once("config.php"); $id=$_GET['id']; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="movie.css">
	<title>Image Upload and edit in PHP and MYSQL database</title>
</head>
<body>
	<?php
		if(isset($_POST['update_submit']))
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
if($file!=''){
//Set image upload size 
    if ($_FILES["image"]["size"] > 500000) {
   $error[] = 'Sorry, your image is too large. Upload less than 500 KB in size.';
}
//Allow only JPG, JPEG, PNG & GIF 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
}
}
if(!isset($error))
{
	if($file!='')
	{
		$res=mysqli_query($db,"SELECT* from otts WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['image']; 
}
unlink($folder.$deleteimage);
move_uploaded_file($file,$target_file); 
$result=mysqli_query($db,"UPDATE otts SET image='$image_file',title='$title',sd='$sd',ld='$ld',launguage='$launguage', CDFC='$CDFC' , platform='$platform', song_link='$song_link', movie_link='$movie_link'  WHERE id=$id"); 
	}
	else 
	{
	$result=mysqli_query($db,"UPDATE otts SET title='$title',sd='$sd',ld='$ld',launguage='$launguage' ,CDFC='$CDFC' ,platform='$platform' , song_link='$song_link', movie_link='$movie_link' WHERE id=$id"); 	
	} 
if($result)
{
 header("location:ott's.php?action=saved");
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
$res=mysqli_query($db,"SELECT* from otts WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$image=$row['image']; 
$title=$row['title']; 
$sd=$row['sd'];
$ld=$row['ld'];
$launguage=$row['launguage'];
$song_link=$row['song_link'];
$movie_link=$row['movie_link'];
}
	?> 
	<div class="container" style="width:500px;">
		<h1> Edit </h1>
	<?php if(isset($update_sucess))
		{
		echo '<div class="success">Image Updated successfully</div>'; 
		} ?>
<form action="" method="POST" enctype="multipart/form-data">
	<label>Image Preview </label><br>
	<img src="admin/uploads/<?php echo $image;?>" height="100"><br>
	<label>Change Image </label>
	<input type="file" name="image" class="form-control">
	<label>Title</label>
	<input type="text" name="title" value="<?php echo $title;?>" class="form-control">
	<label>Short Discription</label>
	<input type="text" name="sd" value="<?php echo $sd;?>" class="form-control"required>
	<label>Long Discription</label>
	<input type="text" name="ld" value="<?php echo $ld;?>" class="form-control"required>
	<label>Song Link</label>
	<input type="text" name="song_link" value="<?php echo $song_link;?>" class="form-control"required>
	<label>Movie Link</label>
	<input type="text" name="movie_link" value="<?php echo $movie_link;?>" class="form-control"required>


	<label>launguage</label>
	<select name="launguage" class="form-control" >
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
    <option value="Amazon Prime Video">Amazon Prime Video</option>
    <option value="SonyLIV">SonyLIV</option>
	<option value="MX Player">MX Player</option>
	<option value="Eros Now">Eros Now</option>
	<option value="ZEE5r">ZEE5</option>
	</select>


	<br><br>
	<button name="update_submit" class="btn-primary">Update </button>
</form>
</div>
</body>
</html>