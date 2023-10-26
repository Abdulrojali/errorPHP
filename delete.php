<?php
include 'config.php';
$idDataTabel=$_GET['id'];
if(isset($idDataTabel)){
	$deleteId=mysqli_query($connect,"DELETE FROM mahasiswa  where id='$idDataTabel'");
	if($deleteId){
		header('Location : list.php'); 
		exit;
	}
	else{
		echo 'Delete data gagal';
	}
}
?>
