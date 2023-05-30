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
            <h1>Tambah Prestasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Prestasi</li>
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
                <h3 class="card-title">Prestasi Sekolah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="simpan-prestasi.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Prestasi</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Prestasi">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="keterangan">
                    	
                    </textarea>
                  </div>
                  <div class="form-group">
                    <a class="btn" title="Insert picture (or just drag &amp; drop)" id="pictureBtn"></a>
                    <input type="file" name="fotoPrestasi" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
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