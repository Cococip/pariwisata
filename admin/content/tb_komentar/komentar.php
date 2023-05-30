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
            <h1>Data Pesan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Komentar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!--<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a href="tambah-prestasi.php" class="btn btn-info"><i class="fas fa-plus"></i> Tambah Pesan</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama Komentator</th>
                      <th>isi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
                  	include '../../config/koneksi.php';
                  	$no = 1;
                  	$Tampil = mysqli_query($connect, "SELECT * FROM tb_komentar");
                  	foreach ($Tampil as $key) {
                  	?>
                    <tr>
                    	<td><?php echo $no++;?></td>
                    	<td><?php echo $key['namak'];?></td>
                    	<td><?php echo $key['isi'];?></td>
                    	<td>
                    	
                            <a href="delete-komen.php?id=<?php echo $key['id_komentar']; ?>" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Komentar Ini?')"><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include '../footer.php';
?>