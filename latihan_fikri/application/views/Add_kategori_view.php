<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><H1>Kategori Saya</H1></center>
    <center><form action="<?= base_url('index.php/Kategori/add_kategori_view') ?>" method="post">
    
    <center><font color="blue"><label for="">Kategori Nama</label></font></center>
    <input type="text" name="Kategori_Nama" id="Kategori_Nama">
    <br><br>
    
    <center><font color="blue"><label for="">Kategori_ket</label></font></center>
    <textarea name="Kategori_ket" id="Kategori_ket" cols="100" rows="20"> </textarea>
    <br><br>
    <button type="sumbit">
       Simpan
     </button>
  </form>
<form action ="<?=base_url('index.php/Kategori/')?>"method="post">
<button type="sumbit">Batal</button>
</body>
</html>



