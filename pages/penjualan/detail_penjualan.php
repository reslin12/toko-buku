<!-- Content Wrapper. Contains page content --> 
<div class="content-wrapper"> 
  <!-- Content Header (Page header) --> 
  <section class="content-header"> 
    <h1> 
      DATA DETAIL PENJUALAN 
    </h1> 
    <ol class="breadcrumb"> 
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li> 
      <li class="active">DATA DETAIL PENJUALAN</li> 
    </ol> 
  </section> 
 
  <!-- Main content --> 
  <section class="content"> 
    <div class="row"> 
      <div class="col-xs-12"> 
        <div class="box box-primary"> 
          <div class="box-header"> 
            <a href="index.php?page=data_penjualan" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-circle-arrow-left"></i> Kembali</a> 
          </div> 
          <div class="box-body table-responsive"> 
            <table id="penjualan" class="table table-bordered table-hover"> 
              <thead> 
                <tr> 
                  <th>#</th> 
                  <th>ID DETAIL PENJUALAN</th> 
                  <th>ID PENJUALAN</th> 
                  <th>ID BUKU</th> 
                  <th>JUMLAH</th> 
                  <th>HARGA</th> 
                </tr> 
              </thead> 
              <tbody> 
                <?php 
                include "../toko_buku/conf/conn.php"; 
                $id = $_GET['id']; 
                $no = 0; 
                $query = mysqli_query($koneksi, "SELECT * from detail_penjualan where id_penjualan='$id'") 
                or die(mysqli_error($koneksi)); 
                while ($row = mysqli_fetch_array($query)) { 
                ?> 
                  <tr> 
                    <td><?php echo $no = $no + 1; ?></td> 
                    <td><?php echo $row['id_detail_penjualan']; ?></td> 
                    <td><?php echo $row['id_penjualan']; ?></td> 
                    <td><?php echo $row['id_buku']; ?></td> 
                    <td><?php echo $row['jumlah']; ?></td> 
                    <td><?php echo $row['total']; ?></td> 
                     
                  </tr> 
                <?php } ?> 
              </tbody> 
            </table> 
          </div> 
          <!-- /.box-body --> 
        </div> 
        <!-- /.box --> 
      </div> 
      <!-- /.col --> 
    </div> 
    <!-- /.row --> 
  </section> 
  <!-- /.content --> 
</div> 
<!-- /.content-wrapper --> 
 
<!-- Javascript Datatable --> 
<script type="text/javascript"> 
  $(document).ready(function() { 
    $('#penjualan').DataTable(); 
  }); 
 
  function hapusPenjualan(id) { 
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) { 
      window.location.href = "pages/penjualan/hapus_penjualan.php?id=" + id; 
    } 
  } 
</script>