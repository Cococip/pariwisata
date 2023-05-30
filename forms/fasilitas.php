<?php 
include ("header.php");
 ?>
 <section id="services" class="services">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
          <h2>Fasilitas Pesona Kalipetir</h2>
           <p> Berikut merupakan fasilitas yang dimiliki oleh wisata pesona Kalipetir</p>
        </div>
          <div class="row">
        <?php
                    include '../config/koneksi.php';
                    $no = 1;
                    $Tampil = mysqli_query($connect, "SELECT * FROM tb_fasilitas");
                    foreach ($Tampil as $key) {
                    ?>
     
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class=""><img src="../admin/content/tb_fasilitas/gambar/<?php echo $key['foto']; ?>" style="height: 350px; width: 350px;">
              </div> <br>
              <h4><a href=""><?php echo $key['nama_fasilitas'];?></a></h4>
              <p><?php echo $key['ket_fasilitas'];?></p>
            </div>
          </div> 


        <?php } ?>

    </section>    
 <?php 

include ("footer.php");?>