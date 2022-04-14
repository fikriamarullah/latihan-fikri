<hr>
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <form action="<?= base_url('index.php/auth/proses_login')?>"method="post">
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" name="username" id="" class="form-control" placeholder="masukan username anda" aria-describedby="helpId">
              <small id="helpId" class="text-muted"></small>
            </div>
            
            
            
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" id="" class="form-control" placeholder="masukan password anda" aria-describedby="helpId">
              <small id="helpId" class="text-muted"></small>
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Login</button>
        </form>
    </div>
</section>
