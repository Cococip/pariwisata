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
            <h1>Tambah Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Pengguna</li>
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
                <h3 class="card-title">Pengguna Pesona Kali Petir</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="simpan-pengguna.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input type="text" class="form-control" name="nama_peng" placeholder="Nama Pengguna">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir Pengguna</label>
                    <input type="date" class="form-control" name="umur_peng" placeholder="Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat_peng">
                    	
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label>Telp.Pengguna</label>
                    <input type="text" class="form-control" name="telp_peng" placeholder="No.Telp">
                  </div>
                  <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan_peng" placeholder="Pekerjaan">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
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