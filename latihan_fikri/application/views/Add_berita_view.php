<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><H1>Tambahkan Berita</H1></center>
    
    <center><form action="<?= base_url('index.php/berita/add_berita_act') ?>" method="post">
    <center><label for="">Judul Berita</label></center>
    <input type="text" name="berita_judul" id="berita_judul">
    <br></br>
    
    <center><label for="">Isi Berita</label></center>
      <textarea name="berita_isi" id="berita_isi" cols="100" rows="20"> 
      </textarea>
      <br></br>
      <label for="">Kategori</label>
      <br><br>
      <select name="kategori_id" id="kategori_id">
<option value="1">Olahraga</option>
<option value="2">Game</option>
<option value="3">Polotik</option>
<option value="4">Kecelakaan</option>
</select>

<br><br>
    <center><label for="">Penulis</label></center>
    <input type="text" name="berita_penulis" id="berita_penulis">
    <br></br>
    <center><label for="">Tanggal</label></center>
    <input type="date" name="berita_tanggal" id="berita_tanggal">
    <br></br>
    <center><label for="">lokasi</label></center>
    <input type="text" name="berita_lokasi" id="berita_lokasi">
    <br></br>
   
   
   
    <center><label for="">Foto</label></center>
    <input type="text" name="berita_foto" id="berita_foto">
    <br></br>
    <center><button type="submit">
 Simpan
   </button></center>
   
   </form></center>
</body>
</html>
