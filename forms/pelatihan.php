<?php 
include ("header.php");
 ?>
 <section id="services" class="services">
     <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
          <h2>Pelatihan Pesona Kalipetir</h2>
           <p> Berikut merupakan kegiatan pelatihan rutin yang daiadakan oleh wisata pesona Kalipetir</p>
        </div>
  </div>

    </section>    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4 portfolio-container">

            <?php
                    include '../config/koneksi.php';
                    $no = 1;
                    $Tampil = mysqli_query($connect, "SELECT * FROM tb_pelatihan");
                    foreach ($Tampil as $key) {
                    ?>
            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="../assets/img/des/<?php echo $key['fotop'];?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../admin/content/tb_pelatihan/gambar/<?php echo $key['fotop'];?>" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><?php echo $key['nama_p'];?></h4>
                  <p><?php echo $key['ket_p'];?></p><br>
                                  <div class="text-center">
              <a class="btn btn-success" href="https://wa.me/6288215305263">  Book Pelatihan</a>
            </div>
                </div>

              </div>
            </div><!-- End Portfolio Item -->
          <?php } ?>

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

 <?php 

include ("footer.php");?>