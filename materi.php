 <?php
    include 'viewers.php';
    $viewers = new viewers();

    //tambahahkan ip yg mengakses
    $viewers->setViewers('dilihat_materi');


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
     <header class="masthead" style="background-image: url('assets/img/materi.jpg')">
         <div class="container position-relative px-4 px-lg-5">
             <div class="row gx-4 gx-lg-5 justify-content-center">
                 <div class="col-md-10 col-lg-8 col-xl-7">
                     <div class="post-heading">
                         <h1>Layout & Protoype</h1>
                         <h2 class="subheading">Membahas tentang layout & prototype dalam IMK</h2>
                         <span class="meta">
                             Dibuat oleh
                             <a href="#!">Aditya</a>
                             pada Juli 24, 2023 dan dikunjungi sebanyak : <?php echo $dilihat_materi ?> orang</span>
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

                     <h2 class="section-heading">Interaksi Manusia dan Komputer dengan Tema Layout dan Prototype </h2>
                     <a href="#!"><img class="img-fluid" src="assets/img/materi.png" alt="..." /></a>
                     <span class="caption text-muted">To go places and do things that have never been done before –
                         that’s what living is all about.</span>
                     <h2>a. Latar Belakang</h2>
                     <p>Interaksi manusia dan komputer (IMK) merupakan bidang studi yang mengkaji bagaimana manusia dan
                         komputer saling
                         berinteraksi untuk mencapai tujuan tertentu. Dalam perkembangan teknologi informasi dan
                         komunikasi, IMK memainkan
                         peran yang sangat penting dalam memastikan penggunaan yang efektif dan efisien dari sistem
                         komputer. Salah satu
                         aspek kunci dalam IMK adalah desain tata letak (layout) dan pembuatan prototipe (prototype).
                         Dalam makalah ini, akan
                         dijelaskan mengenai pengertian, isi bahasan, perkembangan terkini, dan proyeksi kemajuan di masa
                         depan terkait
                         layout dan prototype dalam konteks IMK.</p>

                     <h2>b. Definisi/Pengertian</h2>
                     <p>Layout dalam IMK merujuk pada tata letak elemen-elemen visual seperti teks, gambar, dan kontrol
                         yang terdapat dalam
                         antarmuka pengguna (user interface). Desain layout yang baik memperhatikan prinsip-prinsip
                         ergonomi, estetika, dan
                         pengalaman pengguna yang menyeluruh. Sementara itu, prototype adalah representasi awal dari
                         suatu sistem atau
                         aplikasi yang digunakan untuk menguji dan mengevaluasi desain sebelum dibuat menjadi produk
                         akhir. Prototype
                         membantu pengembang dan desainer dalam memahami bagaimana pengguna berinteraksi dengan sistem.
                     </p>

                     <h2>c. Isi Bahasan</h2>
                     <p>Dalam IMK, layout dan prototype memiliki peran penting dalam merancang antarmuka pengguna yang
                         baik. Beberapa topik
                         yang bisa dibahas dalam konteks layout dan prototype antara lain:</p>
                     <ol>
                         <li>Prinsip-prinsip Desain Layout</li>
                         <ul>
                             <li>Keterbacaan</li>
                             <p>Prinsip ini menekankan pentingnya membuat konten dan informasi mudah dibaca oleh
                                 pengguna. Ini melibatkan
                                 pemilihan font yang mudah dibaca, ukuran teks yang memadai, dan kontras warna yang cukup
                                 antara teks dan latar
                                 belakangnya.</p>
                             <li>Tata Letak Visual yang Efektif</li>
                             <p>Prinsip ini mencakup pengaturan elemen-elemen visual secara strategis dalam tata letak
                                 untuk
                                 membantu pengguna
                                 memahami hierarki informasi dan alur interaksi. Penggunaan ruang, garis, dan bentuk yang
                                 tepat dapat membantu
                                 memandu pandangan pengguna dan memperjelas hubungan antara elemen-elemen dalam
                                 antarmuka.
                             </p>
                             <li>Konsistensi</li>
                             <p>Prinsip ini menekankan pentingnya menjaga konsistensi dalam tata letak antarmuka
                                 pengguna.
                                 Konsistensi dapat
                                 mencakup penggunaan pola desain yang seragam, posisi yang konsisten dari elemen-elemen
                                 antarmuka, dan gaya
                                 visual yang serupa. Konsistensi membantu pengguna memahami dan memprediksi bagaimana
                                 antarmuka akan berperilaku,
                                 sehingga meningkatkan pengalaman pengguna secara keseluruhan.</p>
                             <li>Pengaturan Hierarki Informasi</li>
                             <p>Prinsip ini melibatkan pengaturan elemen-elemen antarmuka berdasarkan tingkat pentingnya.
                                 Elemen-elemen yang
                                 lebih penting atau relevan diberikan penekanan yang lebih besar atau ditempatkan dengan
                                 lebih menonjol,
                                 sementara elemen-elemen yang kurang penting ditempatkan dengan lebih rendah atau dalam
                                 tampilan yang lebih
                                 tersembunyi. Pengaturan hierarki informasi membantu pengguna dalam memahami informasi
                                 dengan
                                 lebih baik dan
                                 fokus pada elemen yang paling relevan.</p>
                             <li>Penempatan yang Tepat</li>
                             <p>Prinsip ini menekankan pentingnya menempatkan elemen-elemen antarmuka dengan tepat agar
                                 mudah
                                 dijangkau dan
                                 diakses oleh pengguna. Penempatan yang tepat mempertimbangkan faktor-faktor seperti
                                 penggunaan tangan dominan,
                                 gerakan mata, dan kebiasaan pengguna dalam mengakses informasi atau berinteraksi dengan
                                 elemen-elemen tertentu.
                             </p>

                             <li>Keseimbangan dan Estetika</li>
                             <p>Prinsip ini melibatkan penciptaan tata letak yang seimbang secara visual dan estetis.
                                 Elemen-elemen antarmuka
                                 yang ditempatkan secara seimbang menghasilkan tampilan yang menyenangkan dan harmonis.
                                 Penyesuaian ukuran,
                                 proporsi, dan jarak antara elemen-elemen dapat membantu menciptakan keseimbangan visual
                                 yang
                                 diinginkan.</p>
                         </ul>

                         <li>Metode Pembuatan Prototype</li>
                         <ul>
                             <li>Prototyping Paparan</li>
                             <p>Metode ini melibatkan pembuatan prototipe berbasis kertas atau digital yang menunjukkan
                                 paparan visual dari
                                 antarmuka pengguna. Prototipe ini membantu dalam mendapatkan pemahaman awal tentang tata
                                 letak, struktur, dan
                                 navigasi antarmuka.</p>

                             <li>Prototyping Horizontal</li>
                             <p>Metode ini fokus pada pengembangan prototipe yang mencakup semua fitur dan fungsi utama
                                 sistem. Prototipe
                                 horizontal menunjukkan representasi singkat dari berbagai aspek sistem dan
                                 mengilustrasikan alur kerja dan
                                 interaksi antara elemen-elemen utama.</p>

                             <li>Prototyping Vertikal</li>
                             <p>Metode ini melibatkan pembuatan prototipe yang mendalam dalam satu aspek atau fitur
                                 sistem tertentu. Prototipe
                                 vertikal memungkinkan pengembang untuk mendemonstrasikan secara rinci dan interaktif
                                 bagaimana fitur tersebut
                                 akan berfungsi dalam konteks yang sesungguhnya.</p>
                         </ul>
                         <li>Keuntungan Penggunaan Prototipe</li>
                         <ul>
                             <li>Pengurangan Risiko Kesalahan Desain</li>
                             <p>Dengan menggunakan prototipe, pengembang dan desainer dapat mengidentifikasi dan
                                 memperbaiki kesalahan atau
                                 kekurangan dalam desain sebelum mengembangkan produk akhir. Prototipe memungkinkan untuk
                                 eksperimen dan
                                 pengujian iteratif, sehingga dapat mengurangi risiko kesalahan desain yang mahal dan
                                 sulit diperbaiki setelah
                                 produk selesai.</p>

                             <li>Pemahaman yang Lebih Baik tentang Kebutuhan Pengguna</li>
                             <p>Prototipe membantu dalam menguji konsep dan mendapatkan umpan balik dari pengguna
                                 potensial. Hal ini membantu
                                 pengembang dan desainer memahami lebih baik tentang kebutuhan, preferensi, dan
                                 ekspektasi pengguna. Dengan
                                 demikian, prototipe membantu dalam mengarahkan pengembangan produk yang lebih sesuai
                                 dengan kebutuhan pengguna.
                             </p>

                             <li>Umpan Balik yang Lebih Cepat</li>
                             <p>Dengan memiliki prototipe yang dapat diuji oleh pengguna, tim pengembang dapat memperoleh
                                 umpan balik secara
                                 lebih cepat. Hal ini memungkinkan perbaikan dan perubahan yang lebih efisien seiring
                                 dengan perkembangan proyek.
                                 Prototipe memberikan kesempatan untuk menguji dan memvalidasi ide-ide sebelum
                                 menghabiskan waktu dan sumber daya
                                 yang signifikan untuk pengembangan lengkap.</p>

                             <li>Komunikasi yang Lebih Efektif antara Tim Pengembang dan Pemangku Kepentingan</li>
                             <p>Prototipe membantu dalam menyajikan konsep dan ide secara visual kepada pemangku
                                 kepentingan, termasuk manajemen,
                                 klien, atau pengguna akhir. Ini memfasilitasi komunikasi yang lebih baik dan pemahaman
                                 yang lebih baik antara
                                 tim pengembang dan pemangku kepentingan, sehingga mengurangi potensi kesalahpahaman atau
                                 ketidakcocokan dalam
                                 harapan dan kebutuhan.</p>
                         </ul>
                     </ol>

                     <h2>d. Perkembangannya Saat Ini</h2>
                     <p>Dalam beberapa tahun terakhir, perkembangan layout dan prototyping dalam IMK telah mengalami
                         kemajuan yang
                         signifikan. Beberapa tren terkini yang dapat disorot dalam perkembangan ini antara lain:</p>
                     <ul>
                         <li>Responsif dan Adaptif</li>
                         <li>Prototyping Berbasis Web</li>
                         <li>Integrasi dengan Desain Visual</li>
                     </ul>

                     <h2>e. Proyeksi Kemajuannya di Masa Depan</h2>
                     <p>Kemajuan dalam layout dan prototyping dalam IMK diperkirakan akan terus berkembang di masa depan.
                         Beberapa proyeksi
                         kemajuan di masa depan antara lain:</p>
                     <ol>
                         <li>Desain Berbasis Kecerdasan Buatan</li>
                         <li>Interaksi Multimodal</li>
                         <li>Realitas Virtual dan Augmentasi</li>
                     </ol>

                     <h2>f. Daftar Referensi</h2>
                     <p>Berikut ini adalah beberapa referensi yang digunakan untuk melengkapi makalah ini dengan diterjemahkan ke bahasa Indonesia, berikut datanya:</p>
                     <ol>
                         <li>Preece, J., Rogers, Y., &amp; Sharp, H. (2015). Interaction design: Beyond human-computer
                             interaction. John
                             Wiley &amp; Sons.</li>
                         <li>Shneiderman, B., &amp; Plaisant, C. (2014). Designing the user interface: Strategies for
                             effective
                             human-computer interaction. Pearson.</li>
                         <li>Snyder, C. (2003). Paper prototyping: The fast and easy way to design and refine user
                             interfaces. Morgan
                             Kaufmann.</li>
                         <li>Tidwell, J. (2010). Designing interfaces: Patterns for effective interaction design.
                             O'Reilly Media.</li>
                         <li>Rogers, Y., Sharp, H., &amp; Preece, J. (2011). Interaction design: Beyond human-computer
                             interaction. John
                             Wiley &amp; Sons.</li>
                     </ol>
                 </div>
             </div>
         </div>
     </article>

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