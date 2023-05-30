   <?php 
include ("header.php");
 ?>
 <section id="services" class="services">
      <div class="container aos-init aos-animate" data-aos="fade-up">
          <h2 align="center">GALERI PESONA KALIPETIR</h2>
          <div class="row">
        <?php
                    include '../config/koneksi.php';
                    $no = 1;
                    $Tampil = mysqli_query($connect, "SELECT * FROM tb_galeri");
                    foreach ($Tampil as $key) {
                    ?>
     
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class=""><img src="../admin/content/tb_galeri/gambar/<?php echo $key['foto']; ?>" style="height: 350px; width: 350px;">
              </div> <br>
            </div>
          </div> 


        <?php } ?>

    </section>  
      
 <?php 

include ("footer.php");?>