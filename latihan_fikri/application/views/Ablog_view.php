
<center><H1>Blog Fikri</H1></center>
<center><button><a href="<?=base_url('index.php/Ablog/add_blog') ?>">Tambahkan Blog</a></button></center>
<hr>
<?php
foreach ($Ablog as $bg){
    echo "<h2>" .$bg['blog_judul']. "</h2>";
    echo "<p>" .$bg['blog_content']. "</p>";
    echo "<p> penulis & Waktu : " .$bg['blog_penulis']. "&nbsp; ".$bg['blog_tgl']. "</p>";
 }
?>