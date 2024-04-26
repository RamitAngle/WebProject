<?php require_once("config.php"); 
$id=$_GET['id']; 
		$res=mysqli_query($db,"SELECT* from otts WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['image']; 
}
$folder="uploads98/";
unlink($folder.$deleteimage);
$result=mysqli_query($db,"DELETE from otts WHERE id=$id") ; 
if($result)
{
	 header("location:ott's.php?action=deleted");
}
?> 