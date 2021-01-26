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
                class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
    </nav>
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">SELAMAT DATANG <b><?php echo $this->session->userdata("nik") ?></b></h2>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                  <a href="<?php echo base_url() ?>index.php/dashboard/voting">
                    <div class="border rounded box" data-bs-hover-animate="pulse"><img class="rounded-circle" src="<?php echo base_url('assets/img/kissclipart-democracy-icon-png-clipart-computer-icons-voting-8083ffeca4d58b40.png')?>" style="background-image: url(&quot;assets/img/kissclipart-democracy-icon-png-clipart-computer-icons-voting-8083ffeca4d58b40.png&quot;);background-color: #fa9521;">
                        <h3 class="name">AYO VOTING !!!</h3>
                        <p class="description">Klik menu ini untuk memberikan suara pilihan anda.</p>
                    </div>
                  </a>
                </div>

                <div class="col-md-6 col-lg-4 item">
                  <a href="<?php echo base_url() ?>index.php/dashboard/biodata">
                    <div class="border rounded box" data-bs-hover-animate="pulse"><img class="rounded-circle" src="<?php echo base_url('assets/img/people-512.png')?>" style="background-color: #fa9521;">
                        <h3 class="name">BIODATA CALON</h3>
                        <p class="description">Klik menu ini untuk melihat biodata calon wakil rakyat.</p>
                    </div>
                  </a>
                </div>

                <div class="col-md-6 col-lg-4 item">
                  <a href="<?php echo base_url() ?>index.php/dashboard/lapor">
                    <div class="border rounded box" data-bs-hover-animate="pulse" style="height: 360px;"><img class="rounded-circle" src="<?php echo base_url('assets/img/Lapor.png')?>">
                        <h3 class="name">LAPOR GANGGUAN</h3>
                        <p class="description">Klik menu ini untuk lapor gangguan yang terjadi selama proses pemilihan umum berlangsung.</p>
                    </div>
                  </a>
                </div>

                <div class="col-md-6 col-lg-4 item">
                  <a href="<?php echo base_url() ?>index.php/dashboard/reset_password">
                    <div class="border rounded box" data-bs-hover-animate="pulse" style="height: 360px;"><img class="rounded-circle" src="<?php echo base_url('assets/img/icon-35-512.png')?>" style="background-color: #fa9521;">
                          <h3 class="name">GANTI PASSWORD</h3>
                          <p class="description">Klik menu ini apa saja peraturan yang berlaku selama proses pemilihan umum berlangsung.</p>
                    </div>
                  </a>
                </div>

                <div class="col-md-6 col-lg-4 item">
                  <a href="<?php echo base_url() ?>index.php/dashboard/count">
                    <div class="border rounded box" data-bs-hover-animate="pulse"><img class="rounded-circle" src="<?php echo base_url('assets/img/256-256-dd1d7f054a2dd82cc958ed6da7c8b6e8.png')?>" style="background-color: #fa9521;">
                        <h3 class="name">QUICK COUNT</h3>
                        <p class="description">Klik menu ini untuk melihat hasil perolehan suara sementara secara real time.</p>
                    </div>
                  </a>
                </div>

                <div class="col-md-6 col-lg-4 item">
                  <a href="<?php echo base_url() ?>index.php/dashboard/logout">
                    <div class="border rounded box" data-bs-hover-animate="pulse" style="height: 360px;"><img class="rounded-circle" src="<?php echo base_url('assets/img/dc3fceb69e.png')?>">
                        <h3 class="name">LOGOUT</h3>
                        <p class="description">Klik menu ini untuk keluar</p>
                    </div>
                  </a>
                </div>
            </div>
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
