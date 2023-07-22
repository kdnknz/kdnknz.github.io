 <?php
    include 'viewers.php';
    $viewers = new viewers();

    //tambahahkan ip yg mengakses
    $viewers->setViewers('dilihat_swa');


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
     <title>Swadharma - Interaksi Manusia dan Komputer</title>
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
     <header class="masthead" style="background-image: url('assets/img/swa.jpg')">
         <div class="container position-relative px-4 px-lg-5">
             <div class="row gx-4 gx-lg-5 justify-content-center">
                 <div class="col-md-10 col-lg-8 col-xl-7">
                     <div class="post-heading">
                         <h1>ITB SWADHARMA</h1>
                         <h2 class="subheading">Institut Teknologi dan Bisnis Swdaharma</h2>
                         <span class="meta">
                             Dibuat oleh
                             <a href="#!">Aditya</a>
                             pada Juli 24, 2023
                         </span>
                     </div>
                 </div>
             </div>
         </div>
     </header>
     <!-- Post Content-->
     <article class="mb-4">
         <div class="container px-4 px-lg-5">
             <div class="row gx-4 gx-lg-5 justify-content-center">
                 <div class="col-md-10 col-lg-8 col-xl-7">
                     <p>ITB Swadharma adalah perguruan tinggi yang merupakan penggabungan antara STMIK Swadharma dan
                         Politeknik Swadharma yang
                         telah berdiri sejak tahun 1992 dan 1993.</p>
                     <p> Menjadi penyelenggara pendidikan tinggi yang unggul di bidang teknologi dan bisnis ditingkat
                         nasional yang menghasilkan
                         lulusan berdaya saing tinggi dan berjiwa teknopreneurship.</p>

                     <a href="https://www.swadharma.ac.id/" target="_blank" rel="noopener noreferrer">Informasi lebih
                         lanjut dengan mengunjungi website resmi : www.swadharma.ac.id</a>

                     <h2 class="section-heading">Prodi yang tersedia</h2>
                     <ul>
                         <li>
                             <a href="https://www.swadharma.ac.id/akuntansi-s1/" target="_blank" rel="noopener noreferrer">Akuntansi (S1)</a>
                         </li>
                         <li>
                             <a href="https://www.swadharma.ac.id/sistem-informasi-s1/" target="_blank" rel="noopener noreferrer">Sistem Informasi (S1)</a>
                         </li>
                         <li>
                             <a href="https://www.swadharma.ac.id/teknik-informatika-s1/" target="_blank" rel="noopener noreferrer">Teknik Informatika (S1)</a>
                         </li>
                         <li>
                             <a href="https://www.swadharma.ac.id/akuntansi-d3/" target="_blank" rel="noopener noreferrer">Akuntansi (D3)</a>
                         </li>
                         <li>
                             <a href="https://www.swadharma.ac.id/administrasi-niaga-d3/" target="_blank" rel="noopener noreferrer">Administrasi Niaga (D3)</a>
                         </li>
                         <li>
                             <a href="https://www.swadharma.ac.id/keuangan-perbankan-d3%E2%80%8B/" target="_blank" rel="noopener noreferrer">Keuangan & Perbankan (D3)</a>
                         </li>
                         <li>
                             <a href="https://www.swadharma.ac.id/sarjana-muda-teknik-eletronika-d3/" target="_blank" rel="noopener noreferrer">Teknik Elektronika (D3)</a>
                         </li>

                     </ul>

                     <h2 class="section-heading">Informasi peneriamaan mahasiswa baru</h2>
                     <a href="#!"><img class="img-fluid" src="assets/img/info-penerimaan.jpg" alt="..." /></a>
                     <span class="caption text-muted">To go places and do things that have never been done before –
                         that’s what living is all about.</span>
                     <p>Pendaftaran Kuliah di Kampus ITB Swadharma Tahun Akademik 2023/2024 telah dibuka !<br><br>Apa
                         saja keuntungan
                         berkuliah di ITB Swadharma?<br>Kamu bisa berkuliah dengan sangat fleksibel karena ITB Swadharma
                         sudah menerapkan
                         kurikulum MBKM, dan ITB Swadharma juga menyediakan program beasiswa bagi kamu yang
                         berprestasi!<br><br>Raih peluang
                         mengembangkan diri dan meraih cita citamu di masa depan.<br>Segera manfaatkan kesempatan ini
                         dengan daftarkan diri
                         secara online di <a rel="noreferrer noopener" href="https://pmb.swadharma.ac.id" target="_blank">https://pmb.swadharma.ac.id</a> atau datang langsung ke sekretariat
                         pendaftaran PMB ITB
                         Swadharma.<br><br>Untuk Brosur dan Pricelistnya bisa dilihat di link berikut :<br><a href="https://bit.ly/BrosurITBS" target="_blank" rel="noreferrer noopener">https://bit.ly/BrosurITBS</a><br>Untuk informasi lebih lanjut
                         hubungi WhatsApp
                         official kami di <a rel="noreferrer noopener" href="https://wa.me/6285100991946" target="_blank">https://wa.me/6285100991946</a><br><br>ITB Swadharma, MAJU BERSAMA
                         MANDIRI&nbsp;BERKARYA&nbsp;!!!</p>
                     </p>
                 </div>
             </div>
         </div>
     </article>

     <div class="container px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center">
             <div class="col-md-10 col-lg-8 col-xl-7">
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