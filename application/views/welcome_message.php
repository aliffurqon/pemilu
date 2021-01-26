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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Login-Form-Clean.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navigation-Clean.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css')?>">
</head>

<body style="height: auto;">
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color: rgb(181,47,44);">
            <div class="container"><a class="navbar-brand" href="<?php echo base_url()?>" style="color: rgb(255,255,255);">PEMILU ONLINE</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto" style="color: rgb(255,255,255);">
                        <li class="nav-item" role="presentation" style="color: rgb(255,255,255);"><a class="nav-link" href="<?php echo base_url()?>" style="color: rgb(255,255,255);">HOME</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url() ?>index.php/login/biodata" style="color: rgb(255,255,255);">BIODATA CALON</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url() ?>index.php/chart" style="color: rgb(255,255,255);">QUICK COUNT</a></li>
                    </ul>
            </div>
    </div>
    </nav>
    </div>
    <div class="row" style="background-image: url(&quot;assets/img/banner.jpg&quot;);width: auto;height: 300px;margin: auto;"></div>
    <div class="login-clean" style="background-color: rgb(246, 167, 110);">
        <form method="post" action="<?php echo base_url() ?>">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration">
                <h1 style="font-size: 30px;">LOGIN PEMILU</h1>
                <?php if(isset($error)) { echo $error; }; ?>
            </div>
            <div class="form-group"><input class="form-control" type="text" name="nik" placeholder="Masukkan NIK Anda"><?php echo form_error('nik'); ?></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Masukkan Password Anda"><?php echo form_error('password'); ?></div>
            <div class="form-group"><button class="btn btn-primary btn-block" name="btn-login" type="submit">Log In</button>
            </div><a href="#" class="forgot">Lupa NIK atau Password? ?</a></form>
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
</body>

</html>
