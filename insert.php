<?php
include 'config.php';
$id=$_POST['id'];
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jeniskelamin=$_POST['jeniskelamin'];
$alamat=$_POST['alamat'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];
    $addData=mysqli_query($connect,"INSERT INTO mahasiswa(id,nim,nama,jeniskelamin,alamat,kelas,jurusan) values ('$id','$nim','$nama','$jeniskelamin','$alamat','$kelas','$jurusan')");
    if($addData){
        header('location:tabel.php');
        exit;
    }
    else{
        echo 'failed';
    }


?>