<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Berita Hari ini</title>
</head>
<body>
<center><H3>Berita Hari Ini</H3></center>
<center><button><H6><a href="<?=base_url('index.php/berita/add_berita') ?>">Tambahkan Berita</a><H6></button></center>
<table border="1"width="100%">
<tr>
 <th>No</th>
 <th>Judul Berita</th>
 <th>Isi</th>
 <th>Penulis</th> 
 <th>Tanggal</th>
 <th>Lokasi</th>
 <th>Kategori</th>
 <th>Foto</th>
 <th>Action</th>

 </tr>
<?php
    foreach ($berita as $brt){
    ?>
    <tr>
        <td><?=$brt['berita_id']?></td>
        <td><?=$brt['berita_judul']?></td>
        <td><?=$brt['berita_isi']  ?></td>
        <td><?=$brt['berita_penulis'] ?></td> 
        <td><?=$brt['berita_tanggal'] ?></td>
        <td><?=$brt['berita_lokasi'] ?></td>
        <td><?=$brt['kategori_id'] ?></td>
        <td><?=$brt['berita_foto']  ?></td>

        <td>EDIT ||
        <button><H6><a href="<?= base_url('index.php/berita/delete/'.$brt['berita_id'])?>">Hapus</a></H6></button>
        </td>
        </tr>
    <?php
     }
    ?>
    </table>
</body>
</html>