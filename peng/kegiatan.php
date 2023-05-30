<?php 
include ("header.php");
 ?>
 <section id="services" class="services">
     <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
          <h2>Kegiatan Rutin Pesona Kalipetir</h2>
           <p> Berikut merupakan kegatan rutin yang daiadakan wisata pesona Kalipetir</p>
        </div>
          <div class="row">
        <?php
                    include '../config/koneksi.php';
                    $no = 1;
                    $Tampil = mysqli_query($connect, "SELECT * FROM tb_kegiatan");
                    foreach ($Tampil as $key) {
                    ?>
     
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class=""><img src="../admin/content/tb_kegiatan/gambar/<?php echo $key['foto']; ?>" style="height: 350px; width: 350px;">
              </div> <br>
              <h4><a href=""><?php echo $key['nama_kegiatan'];?></a></h4>
              <p><?php echo $key['ket_kegiatan'];?></p>
            </div>
          </div> 

        <?php } ?>

    </section>    
 <?php 

include ("footer.php");?>