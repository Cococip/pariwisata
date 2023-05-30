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
            <h1>Edit Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Pengguna</li>
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
                <h3 class="card-title">Pengguna</h3>
              </div>
              <!-- /.card-header -->
              
              <!-- form start -->
              <?php
              include ('../../config/koneksi.php');
              $id = $_GET['id'];
              $Cek = mysqli_query($connect, "SELECT * FROM tb_pengunjung WHERE id_pengunjung = '$id'");
              while ($key = mysqli_fetch_array($Cek)) {
                ?>

              <form action="update-peng.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                  <input type="hidden" class="form-control" name="id" value="<?php echo $key['id_pengunjung'];?>">
                  <div class="form-group">
                    <label>Nama Pengunjung</label>
                    <input type="text" class="form-control" name="nama_peng" value="<?php echo $key['nama_peng'];?>" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat_peng">
                    	<?php echo $key['alamat_peng'];?>
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="umur_peng" value="<?php echo $key['umur_peng'];?>" placeholder="tanggal lahir">
                  </div>
                  <div class="form-group">
                    <label>Telephone</label>
                    <input type="text" class="form-control" name="telp_peng" value="<?php echo $key['telp_peng'];?>" placeholder="No Telephone">
                  </div>
                  <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan_peng" value="<?php echo $key['pekerjaan_peng'];?>" placeholder="Pekerjaan">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $key['username'];?>" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $key['password'];?>" placeholder="Password">
                  </div>
                

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
<script type="text/javascript">
    function change()
    {
    var x = document.getElementById('password').type;

    if (x == 'password')
    {
        document.getElementById('password').type = 'text';
        document.getElementById('mybutton').innerHTML;
    }
    else
    {
        document.getElementById('password').type = 'password';
        document.getElementById('mybutton').innerHTML;
    }
    }
</script>

<?php
include '../footer.php';
?>