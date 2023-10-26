<?php
include 'config.php';
$idTabel= $_GET['id'];
$query=mysqli_query($connect,"SELECT * FROM mahasiswa WHERE id='$idTabel'");
$result=mysqli_fetch_all($query,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100%;
            height:100%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        h1{
    font-size: 2em;
    font-weight: 800;
    text-transform: capitalize;
    font-family: sans-serif;
        }
        form{
            display:flex;
            flex-direction:column;
            gap:8px;
        }
        form input,form textarea{
            width:500px;
            padding:8px 20px;
            border-radius:1px;
            border:none;
            border-bottom:1px solid gray;
        }
        form textarea{
            height:150px;
        }
        form button{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h1>update data</h1>
<form action="update.php" method="post">
   <input type="text" name='id' placeholder='id' value="<?php echo $result[0]['id']?>">
        <input type="text" name='nim' placeholder='nim' value="<?php echo $result[0]['nim']?>">
        <input type="text" name='nama' placeholder='nama' value="<?php echo $result[0]['nama']?>">
        <input type="text" name='jeniskelamin' placeholder='jenis-kelamin'value="<?php echo $result[0]['jeniskelamin']?>">
        <textarea type="text" name='alamat' placeholder='alamat'value="<?php echo $result[0]['alamat']?>"></textarea>
        <input type="text" name='jurusan' placeholder='jurusan'value="<?php echo $result[0]['jurusan']?>">
        <input type="text" name='kelas' placeholder='kelas'value="<?php echo $result[0]['kelas']?>">
        <button type="submit">update</button>
    </form>
</body>
</html>