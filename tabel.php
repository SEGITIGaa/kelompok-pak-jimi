<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabel data</title>
    </head>
    <body>
<?php

$koneksi = mysqli_connect('localhost','root','','kelompok');

function tampilkan($tampilkan){
   global $koneksi;
   $hasil = mysqli_query ($koneksi,$tampilkan);
   $rows = [];
   while($row = mysqli_fetch_assoc($hasil)){
       $rows[] = $row; 
   }
   return $rows;
}
?>
<?php
$users = tampilkan('SELECT * FROM data');
?>

        <form action="" method="post">
            <table border="2" cellspacing="0" cellpadding="10">
                <tr>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>Gender</th>
                    <th>Pendidikan</th>
                    <th>Prestasi</th>
                    <th>Edit & Hapus</th>
                </tr>
                <?php $id = 1; ?>
                <!-- masukin variabel nya bang -->
                <?php foreach($users as $user) :?>
                <?php error_reporting(E_ALL ^E_WARNING)?>
                <tr>
                    <td><?php echo $user['id'];?></td>
                    <td><?php echo $user['nama'];?></td>
                    <td><?php echo $user['usia']." tahun ";?></td>
                    <td><?php echo $user['alamat'];?></td>
                    <td><?php echo $user['agama'];?></td>
                    <td><?php echo $user['jenis_kelamin'];?></td>
                    <td><?php echo $user['pendidikan_akhir'];?></td>
                    <td><?php echo $user['prestasi'];?></td>
                    <td>
                        <button type="submit" name="delete" value="<?php echo $user['id'];?>">Delete</button>
                    </td>
                </tr>
                <?php $id++ ?>
                <?php endforeach; ?>
            </table>
        </form>
        <?php
    $delete= $_POST['delete'];
    $delete= (int)$delete;

    $sqlDel = "DELETE FROM data WHERE id= $delete";
    $hapus = mysqli_query($koneksi,$sqlDel);
    

    ?>
    </body>
</html>
