<?php
session_start();
if(isset($_SESSION["salah"])){
    if($_SESSION["salah"] >= 3){
        echo '<h1>SELAMAT ANDA TELAH DIBLOKIR</h1>';
        exit();
    } elseif ($_SESSION["salah"] < 3) {
        
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Topic 4</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap2.css">
  <link rel="icon" href="assets/img/icon.png">
  <script>
    function alertsalahlogin() {
      // body...
    }
    window.setTimeout(function () {
      $(".alert").fadeTo(400,0).slideUp(400,function () {
        $(this).remove();
      });
    }, 4000);
    function showModalku() {
      $(document).ready(function () {
        $('#ModalKu').modal('show')
      });
    }
  </script>
  <style type="text/css">
    body{
      background-image: url(https://i.imgur.com/rG2uegc.jpg);
    }
  </style>
</head>
<body>
  <form method="POST" action="login.php">
    <div class="vid-container">
    <div class="inner-container">
      <div>
        <?php
        if (isset($_SESSION["salah"])) {
          if ($_SESSION["salah"] < 3 ) {
            echo '<div align="center" class="alert alert-primary alert-dismissible fade show" role="alert">
            Anda salah ke-'.$_SESSION["salah"].'
            <button type="button" class="close" data-dismiss="alert" arial-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
          }
        }
        ?>
      </div><!--
      <div align="center" class="alert alert-primary alert-dismissible fade show" role="alert">
        ~ Selamat Datang ~
      </div>-->
      <div class="box">
        <center><img src="assets/img/icon.png" width="80" height="80"></center>
        <h1>Silahkan Masuk</h1>
        <p>Selamat Belajar</p>
        <input type="text" name="usr" id="usr" class="form-control" value placeholder="Username or Email">
        <input type="password" name="pass" id="pass" class="form-control" value placeholder="Password">
        <button name="login" class="btn btn-primary btn-block" type="submit">Login</button>
        <p>Bukan anggota ? <span>Mendaftar</span></p>
        <!--<button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#ModalKu">
          Show Modal Madul
        </button>-->
        <button onclick="showModalku();" class="btn btn-primary btn-block" type="button" data-toggle="modal">
          Show Modal dengan JS
        </button>
      </div>
    </div>
  </div>
  </form>
  <div class="modal fade" id="ModalKu" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel01">
            Username atau Password Salah
          </h5>
          <button class="close" type="button" data-dismiss="modal" arial-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Klik Mendaftar untuk mendapatkan user dan password
          </p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            TUTUP
          </button>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>