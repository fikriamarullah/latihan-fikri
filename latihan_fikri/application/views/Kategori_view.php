<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Blog ini</title>
</head>
<body>
<center><H1>kategori fikri</H1></center>
<center><button><a href="<?=base_url('index.php/kategori/add_kategori') ?>">Tambahkan kategori</a></button></center>
<table border="1"width="100%">
<tr>
 <th>No</th>
 <th>Judul kategori</th>
 <th>Isi</th>
</tr>

<?php
foreach ($kategori as $kat){
?>
<tr>
    <td><?=$kat['kategori_id']?></td>
    <td><?=$kat['kategori_nama']?></td>
    <td><?=$kat['kategori_ket']  ?></td>

    <td>EDIT ||
    <button><H6><a href="<?= base_url('index.php/kategori/delete/'.$kat['kategori_id'])?>">Hapus</a></H6></button>
    </td>
    </tr>   
    <?php
 }
?>
</table>  
</body>
</html> 

































































