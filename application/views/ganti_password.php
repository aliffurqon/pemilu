<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Contact-Form-Clean.css')?>">
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
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: rgb(255,255,255);">QUICK COUNT</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: rgb(255,255,255);">PERATURAN</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url() ?>index.php/dashboard/lapor" style="color: rgb(255,255,255);">LAPOR</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url() ?>index.php/dashboard/logout" style="color: rgb(255,255,255);">LOGOUT</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="contact-clean">
        <?php if ($this->session->flashdata('success')): ?>
        <p class="text-center"><?php echo $this->session->flashdata('success'); ?></p>
        <?php endif; ?>
        <form action="<?php echo base_url() ?>index.php/Reset_password/check_account" method="post">
            <h2 class="text-center">GANTI PASSWORD</h2>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Masukkan Email Anda"></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" value="save">Ganti Password </button></div>
        </form>
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
