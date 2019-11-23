<?php require_once('../config/main.php');
$data_produk = mysql_query("select * from produk");
$data_bukutamu=mysql_query("select * from bukutamu");
$data_admin=mysql_query("select * from admin");
 ?>
<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo mysql_num_rows($data_admin); ?></h3>
          <p>Data Admin</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="./?page=admin" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo mysql_num_rows($data_produk); ?></h3>
          <p>Data Produk</p>
        </div>
        <div class="icon">
          <i class="fa fa-shopping-cart"></i>
        </div>
        <a href="./?page=data_produk" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?php echo mysql_num_rows($data_bukutamu); ?></h3>
          <p>Respon Pengunjung</p>
        </div>
        <div class="icon">
          <i class="fa fa-file"></i>
        </div>
        <a href="./?page=data_bukutamu" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
  </div><!-- /.row -->  