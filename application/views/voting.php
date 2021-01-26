<?php error_reporting(0);?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Footer-Basic.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Highlight-Blue.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Login-Form-Clean.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navigation-Clean.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Team-Boxed.css')?>">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color: rgb(181,47,44);">
        <div class="container"><a class="navbar-brand" href="<?php echo base_url() ?>index.php/dashboard" style="color: rgb(255,255,255);">PEMILU ONLINE</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto" style="color: rgb(255,255,255);">
                  <li class="nav-item" role="presentation" style="color: rgb(255,255,255);"><a class="nav-link" href="<?php echo base_url() ?>index.php/dashboard" style="color: rgb(255,255,255);">HOME</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url() ?>index.php/dashboard/voting" style="color: rgb(255,255,255);">VOTING</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url() ?>index.php/dashboard/biodata" style="color: rgb(255,255,255);">BIODATA CALON</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url() ?>index.php/dashboard/count" style="color: rgb(255,255,255);">QUICK COUNT</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url() ?>index.php/dashboard/lapor" style="color: rgb(255,255,255);">LAPOR</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url() ?>index.php/dashboard/logout" style="color: rgb(255,255,255);">LOGOUT</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">VOTING ONLINE</h2>
            </div>
            <?php foreach ($voting as $b){
              $nik=$b['nik'];
            }
            ?>

            <?php if ($this->session->userdata("nik")==$nik){?>
              <p class="text-center" style="padding-bottom: 100px;">TERIMA KASIH SUDAH MEGGUNAKAN HAK SUARA ANDA</p>
            <?php }else{ ?>
              <div class="row people">
                <?php foreach ($biodata as $b):
                  $no=$b['no_urut'];
                  $foto=$b['foto'];
                  $nama=$b['nama'];
                  $visi=$b['visi'];
                  $misi=$b['misi'];
                ?>
                  <div class="col-md-6 col-lg-4 col-xl-6 item">
                      <div class="border rounded box" data-bs-hover-animate="pulse"><img class="rounded-circle" src="<?php echo base_url('assets/img/'.$foto)?>" style="background-image: url(&quot;assets/img/kissclipart-democracy-icon-png-clipart-computer-icons-voting-8083ffeca4d58b40.png&quot;);background-color: #fa9521;height: 160px;width: 160px;">
                          <h3 class="name"><?php echo $nama ?></h3>
                          <p class="description" name="no_urut" type="hidden" value="<?php echo $no ?>">NO. URUT <?php echo $no ?></p>
                      </div>
                    <form action="<?php echo base_url() ?>index.php/voting/add" method="post">
                      <input  name="nik" type="hidden" value="<?php echo $this->session->userdata("nik") ?>"/>
                      <input name="no_urut" type="hidden" value="<?php echo $no ?>"/>
                      <div class="form-group"><button class="btn btn-primary" type="submit" value="save">PILIH</button></div>
                    </form>
                  </div>
                  <?php endforeach; ?>
              </div>
            <?php }; ?>
        </div>
    </div>
    <div class="footer-basic" style="background-color: rgb(50,55,58);">
        <footer>
            <div class="social"><a href="#" style="background-color: #ffffff;"><i class="icon ion-social-instagram"></i></a><a href="#" style="background-color: #ffffff;"><i class="icon ion-social-snapchat"></i></a><a href="#" style="background-color: #ffffff;"><i class="icon ion-social-twitter"></i></a>
                <a
                    href="#" style="background-color: #f5f5f5;"><i class="icon ion-social-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" style="color: #ffffff;">Home</a></li>
                <li class="list-inline-item"><a href="#" style="color: #ffffff;">Services</a></li>
                <li class="list-inline-item"><a href="#" style="color: #ffffff;">About</a></li>
                <li class="list-inline-item"><a href="#" style="color: #ffffff;">Terms</a></li>
                <li class="list-inline-item"><a href="#" style="color: #ffffff;">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2017</p>
        </footer>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bs-animation.js')?>"></script>
</body>

</html>
