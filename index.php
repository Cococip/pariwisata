  <!-- ======= Hero Section ======= -->
  <?php
                    include ('config/koneksi.php');
                    $Tampil = mysqli_query($connect, "SELECT * FROM tb_profil");
                    foreach ($Tampil as $key) {
                    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pesona Kalipetir</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/mah.png" rel="icon">
  <link href="assets/img/mah.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <h1>PESONA<span> KALIPETIR</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Info</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="forms/fasilitas.php">Fasilitas</a></li>
              <li><a href="forms/prestasi.php">Prestasi</a></li>
            </ul>
          </li>
          <!-- <li><a class="nav-link scrollto " href="forms/pelatihan.php">Pelatihan</a></li> -->
          <li><a class="nav-link scrollto " href="forms/kegiatan.php">Kegiatan</a></li>
          <li><a class="nav-link scrollto" href="forms/galeri.php">Galeri</a></li>
           <li><a class="nav-link scrollto" href="forms/review.php">Review</a></li>    
           <li><a class="nav-link scrollto" href="peng/index.php">Login</a></li>    
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>PESONA KALIPETIR</h2>
          <p><?php echo $key['deskripsi1'];?></p>
          <div class="d-flex justify-content-center justify-content-lg-start">
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/mah.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="forms/prestasi.php" class="stretched-link">Prestasi</a></h4>
            </div>
          </div>

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="forms/galeri.php" class="stretched-link">Galeri</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clipboard-minus-fill"></i></div>
              <h4 class="title"><a href="forms/fasilitas.php" class="stretched-link">Fasilitas</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="forms/review.php" class="stretched-link">Review</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
       

        <div class="section-header">
           
          <h2>Tentang Pesona Kalipetir</h2>
           <img src="admin/content/tb_profil/gambar/<?php echo $key['foto1'];?>" class="img-fluid rounded-4" alt="">

      <?php } ?>
        </div>
        
        <div class="row gy-4">
          <div class="col-lg-6">
             <?php
                    include ('config/koneksi.php');
                    $Tampil = mysqli_query($connect, "SELECT * FROM tb_profil2");
                    foreach ($Tampil as $key) {
                    ?>
            <h3><?php echo $key['judul2'];?></h3>
            <img src="admin/content/tb_profil2/gambar/<?php echo $key['foto2'];?>" class="img-fluid rounded-4 mb-4" alt="">
            <p><?php echo $key['deskripsi2'];?></p>

      <?php } ?>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <?php
                    include ('config/koneksi.php');
                    $Tampil = mysqli_query($connect, "SELECT * FROM tb_profil3");
                    foreach ($Tampil as $key) {
                    ?>
      
            <h3><?php echo $key['judul3'];?></h3>
              <p>
                <p><?php echo $key['deskripsi3'];?></p>
              </p>

              <div class="position-relative mt-4">
                <img src="admin/content/tb_profil3/gambar/<?php echo $key['foto3'];?>" class="img-fluid rounded-4" alt="">
                <?php } ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Galeri</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4 portfolio-container">
            <?php
                    include 'config/koneksi.php';
                    $no = 1;
                    $Tampil = mysqli_query($connect, "SELECT * FROM tb_galeri");
                    foreach ($Tampil as $key) {
                    ?>

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="admin/content/tb_galeri/gambar/<?php echo $key['foto']; ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="admin/content/tb_galeri/gambar/<?php echo $key['foto']; ?>" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->


      <?php } ?>
          </div>        
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Komentar</h2>
          <p>Beri Kami Masukan Dan Komentar Agar Kami Dapat Terus Berinofasi</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <div>
                  <h4>Komentar ini akan Tampil pada menu komentar</h4>
                </div>
              </div>
          </div>
        </div>

          <div class="col-lg-8">
            <form action="forms/komentar.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="namak" class="form-control" id="namak" placeholder="Your Name" required>
                </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="isi" rows="7" placeholder="Komentar" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Kirim Komentar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> -->

    

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Kontak</h2>
          <p>Tinggalkan pesan anda disini</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div>

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div>

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="POST" role="form"  class="php-email-form">
            <div class="row">
                <div class="col form-group">
                  <input type="text" name="nama" class="form-control"  placeholder="Your Name" required>
                </div>
                <div class="col form-group ">
                  <input type="email" class="form-control" name="email"  placeholder="Your Email" required >
                </div>
            </div>
              <div class="form-group mt-4">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required >
              </div>
              <div class="form-group mt-4">
                <textarea class="form-control" name="pesan" rows="5" placeholder="Message" required></textarea>
              </div>
            <div class="text-center">
              <button type="submit">Kirim Pesan</button>
            </div>
            </form>
          </div>

        </div>

      </div>
    </section> -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container mt-4">
      <div class="copyright">
        <p>Berikan Dukungan Positif Agar Kami Terus Berkembang </p>
        &copy; Copyright <strong><span>Pesona Kalipetir</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

            