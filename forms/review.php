<?php 
include ("header.php");
 ?>
 <!-- ======= Testimonials Section ======= -->
 <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Review</h2>
          <p>Beri Kami Masukan Dan Komentar Agar Kami Dapat Terus Berinofasi</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <div>
                  <h4>Review ini akan Tampil pada menu komentar</h4>
                </div>
              </div>
          </div>
        </div>

          <div class="col-lg-8">
            <form action="komentar.php" method="post" role="form" class="php-email-form">
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
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Review Kalipetir</h2>
          <p>BErikut merupakan beberapa ulasan dari pengunjung Kalipetir</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
                    include '../config/koneksi.php';
                    $no = 1;
                    $Tampil = mysqli_query($connect, "SELECT * FROM tb_komentar");
                    foreach ($Tampil as $key) {
                    ?>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <div>
                      <h3><?php echo $key['namak']; ?></h3>
                      
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i><?php echo $key['isi']; ?>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
  
 <?php 

include ("footer.php");?>