<?php
include '../header.php';
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit profil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit profil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">profil Pesona Kalipetir</h3>
              </div>
              <!-- /.card-header -->
              
              <!-- form start -->
              <?php
              include ('../../config/koneksi.php');
              $id = $_GET['id'];
              $Cek = mysqli_query($connect, "SELECT * FROM tb_profil2 WHERE id_profil2 = '$id'");
              while ($key = mysqli_fetch_array($Cek)) {
                ?>

              <form action="update-profil.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                  <input type="hidden" class="form-control" name="id" value="<?php echo $key['id_profil2'];?>">
                  <div class="form-group">
                    <label>Judul profil</label>
                    <input type="text" class="form-control" name="judul2" value="<?php echo $key['judul2'];?>" placeholder="Judul profil">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi2">
                      <?php echo $key['deskripsi2'];?>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <a class="btn" title="Insert picture (or just drag &amp; drop)" id="pictureBtn"></a>
                    <input type="file" name="foto2" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                  </div>

                  <div class="item form-group">
                    <p style="color: red;">Gambar Yang Diperbolehkan .PNG|.JPG|.JPEG</p>                    
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" value="Simpan" name="" class="btn btn-primary">
                </div>
              </form>
            <?php } ?>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
</section>
</div>

<?php
include '../footer.php';
?>