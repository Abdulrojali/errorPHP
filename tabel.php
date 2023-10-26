<?php
include 'config.php';
$query=mysqli_query($connect,"SELECT * FROM mahasiswa")or die(mysqli_error());
$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tabel.css">
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
h1{
    font-size: 2.1em;
    font-weight: 800;
    text-transform: capitalize;
    font-family: Arial, Helvetica, sans-serif;
}
body{
    width:100%;
    height: 120vh;
    display: flex;
    flex-direction: column;
    gap: 30px;
    justify-content: center;
    align-items: center;
    padding: 20px 0;
}
.add{
    margin-bottom: 20px;
    color:black;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    border: 1px solid black;
}
table{
    width:80%;
    font-family: sans-serif;
    color: white;
    border-collapse: collapse;
    padding: 10px;
    border-radius: 5px;
}
a{
    color: white;
    text-decoration: none;
}
table, tr,td {
    text-align: center;
    padding:30px;   
    border:1px solid white;
}
table .blue{
    background-color:blue;
    color:white;
    text-transform: capitalize;
    font-weight:900;
}
table .text{
    color:black;
    background-color:blue;
}
table .textBlack{
    color:black;
}
table .gray{
    color:black;
    background-color: rgb(221, 211, 211);
}
.add{
    color:white;
    background-color:red;
    border:none;
}
table .textBlue{
    color:blue;
}
table .textYellow{
    color:yellow;
}
    </style>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <table>
        <tr class='blue'>
            <td>id</td>
            <td>nim</td>
            <td>nama</td>
            <td>jenis kelamin</td>
            <td>alamat</td>
            <td>kelas</td>
            <td>jurusan</td>
            <td class='textYellow'>menu edit</td>
            <td class='textYellow'>menu delete<w/td>
        </tr>
        <tr class='gray'>
        <?php foreach($data as $result) : ?>
			<tr style='text-align:center;'>
                <td class='text'><?php echo $result['id']?></td>
                <td class='gray'><?php echo $result['nim']?></td>
                <td class='gray'><?php echo $result['nama']?></td>
                <td class='gray'><?php echo $result['jeniskelamin']?>
                <td class='gray'><?php echo $result['alamat']?></td>
                <td class='gray'><?php echo $result['kelas']?></td>
                <td class='gray'><?php echo $result['jurusan']?></td>
                <td  class='gray'><a class='textBlue' href="edit.php?id=<?php echo $result['id']?>">edit</a></td>
                <td class='gray'>
                    <a class='textBlue' href="delete.php?id=<?php echo $result['id']?>">
                    delete</a>
                </td>
			</tr>
		<?php endforeach ?>
        </tr>
    </table>
    <a class='add' href="add.php">tambah data</a>
</body>
</html>