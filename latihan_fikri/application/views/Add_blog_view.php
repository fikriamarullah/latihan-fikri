<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><H1>BLOG Fikri</H1></center>
    <center><form action="<?= base_url('index.php/ablog/add_blog_act') ?>" method="post">
    
    <center><font color="blue"><label for="">Judul Blog</label></font></center>
    <input type="text" name="blog_judul" id="blog_judul">
    <br><br>
    
    <center><font color="blue"><label for="">Isi Blog</label></font></center>
    <textarea name="blog_content" id="blog_content" cols="100" rows="20"> </textarea>
    <br><br>

    <center><font color="blue"><label for="">Penulis</label></font></center>
    <input type="text" name="blog_penulis" id="blog_penulis">
    <br><br>
    <button type="sumbit">
       Simpan
     </button>
  </form>
<form action ="<?=base_url('index.php/ablog/')?>"method="post">
<button type="sumbit">Batal</button>
</body>
</html>



