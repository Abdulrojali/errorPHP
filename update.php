<?php
include 'config.php';
$id=$_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama']; 
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$kelas = $_POST['kelas'];
$jurusan= $_POST['jurusan'];

$update=mysqli_query($connect,"UPDATE mahasiswa SET nim='$nim',nama='$nama',alamat='$alamat',jeniskelamin='$jeniskelamin',kelas='$kelas',jurusan='$jurusan' WHERE id='$id'");
    if($update){
        header('location:tabel.php');
    }else{
        echo 'error tidak bisa update data!!';
    }
?>