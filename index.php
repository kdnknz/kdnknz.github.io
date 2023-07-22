 <?php
    include 'viewers.php';
    $viewers = new viewers();

    //tambahahkan ip yg mengakses
    $viewers->setViewers('dilihat');


    //get data berdasarkan ip yg akses dimasing2 folder
    $dilihat = $viewers->cek('dilihat');
    $dilihat_materi = $viewers->cek('dilihat_materi');
    $dilihat_swa = $viewers->cek('dilihat_swa');

    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <meta name="description" content="" />
     <meta name="author" content="" />
     <title>Home - Interaksi Manusia dan Komputer</title>
     <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
     <!-- Font Awesome icons (free version)-->
     <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
     <!-- Google fonts-->
     <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="css/styles.css" rel="stylesheet" />
 </head>

 <body>
     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
         <div class="container px-4 px-lg-5">
             <a class="navbar-brand" href="index.php">211212014 - Aditya</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                 Menu
                 <i class="fas fa-bars"></i>
             </button>
             <div class="collapse navbar-collapse" id="navbarResponsive">
                 <ul class="navbar-nav ms-auto py-4 py-lg-0">
                     <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Home</a></li>
                 </ul>
             </div>
         </div>
     </nav>
     <!-- Page Header-->
     <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
         <div class="container position-relative px-4 px-lg-5">
             <div class="row gx-4 gx-lg-5 justify-content-center">
                 <div class="col-md-10 col-lg-8 col-xl-7">
                     <div class="site-heading">
                         <h1>Interaksi Manusia dan Komputer</h1>
                         <span class="subheading">Website ini dibuat untuk memenuhi tugas pada mata kuliah Interaksi
                             Manusia dan Komputer. <br>Dosen Pengampu : ANDY DHARMALAU S.KOM M.KOM</span>
                     </div>
                 </div>
             </div>
         </div>
     </header>
     <!-- Main Content-->
     <div class="small text-center text-muted fst-italic">Website ini telah dikunjungi oleh <?php echo $dilihat ?> pengunjung</div>
     <div class="container px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center">
             <div class="col-md-10 col-lg-8 col-xl-7">
                 <!-- Post preview-->
                 <div class="post-preview">
                     <a href="swdaharma.php">
                         <h2 class="post-title">Informasi mengenai ITBS Swadharma</h2>
                         <h3 class="post-subtitle">Mengenal ITB Swadharma</h3>
                     </a>
                     <p class="post-meta">
                         Dibuat oleh
                         <a href="#!">Aditya</a>
                         pada Juli 24, 2023 <br>Dikunjungi : <?php echo $dilihat_swa ?> Pengunjung
                     </p>
                 </div>
                 <!-- Divider-->
                 <hr class="my-4" />
                 <!-- Post preview-->
                 <div class="post-preview">
                     <a href="materi.php">
                         <h2 class="post-title">Layout & Prototype</h2>
                         <h3 class="post-subtitle">Materi Layout & Prototype </h3>
                     </a>
                     <p class="post-meta">
                         Dibuat oleh
                         <a href="#!">Aditya</a>
                         pada Juli 24, 2023 <br>Dikunjungi : <?php echo $dilihat_materi ?> Pengunjung
                     </p>
                 </div>

             </div>
         </div>
     </div>
     <!-- Footer-->
     <footer class="border-top">
         <div class="container px-4 px-lg-5">
             <div class="row gx-4 gx-lg-5 justify-content-center">
                 <div class="col-md-10 col-lg-8 col-xl-7">
                     <div class="small text-center text-muted fst-italic">Website ini dibuat untuk memenuhi tugas
                         Interaksi
                         Manusia dan Komputer. <br>Dosen Pengampu : ANDY DHARMALAU S.KOM M.KOM</div>
                 </div>
             </div>
         </div>
     </footer>
     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Core theme JS-->
     <script src="js/scripts.js"></script>
 </body>

 </html>