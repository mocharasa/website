<?php require_once('../config/main.php'); 
$query=mysql_query("select * from produk");
$data = mysql_fetch_array($query);
?>
			  <div class='box box-info'>
                <div class='box-header'>
                  <h2 class='box-title'><strong>Tambahkan data baru</strong></h2>                  
                </div><!-- /.box-header -->
                <div class='box-body pad'>
                  <form class="form-horizontal" role="form" method="post" action="pages/model/tambahproduk.php" enctype="multipart/form-data">
                    <div class="box-body">
                    <div class="form-group has-feedback">
                      <label class="col-sm-2 control-label">Nama Produk</label>
                      <div class="col-sm-7">
                        <input type="text" name="nama" class="form-control" />
						<span class="glyphicon glyphicon-font form-control-feedback"></span>
                      </div>
                    </div>
					<div class="form-group has-feedback">
                      <label class="col-sm-2 control-label">Jenis Produk</label>
                      <div class="col-sm-7">
                        <input type="text" name="jenis" class="form-control" />
						<span class="glyphicon glyphicon-folder-open form-control-feedback"></span>
                      </div>
                    </div>
					<div class="form-group has-feedback">
                      <label class="col-sm-2 control-label">Varian Rasa</label>
                      <div class="col-sm-7">
                        <input type="text" name="rasa" class="form-control" />
						<span class="glyphicon glyphicon-glass form-control-feedback"></span>
                      </div>
                    </div>
					<div class="form-group has-feedback">
                      <label class="col-sm-2 control-label">Harga</label>
                      <div class="col-sm-7">
                        <input type="text" name="harga" class="form-control" />
						<span class="glyphicon glyphicon-tag form-control-feedback"></span>
                      </div>
                    </div>					
					<div class="form-group has-feedback">
                      <label class="col-sm-2 control-label">Gambar</label>
                      <div class="col-sm-7">
                        <input type="file" name="gambar" class="form-control" />
						<span class="glyphicon glyphicon-picture form-control-feedback"></span>
                      </div>
                    </div>
					<br/>
					<button type="submit" name="simpan" class="btn btn-primary pull-left"> <i class="fa fa-plus"></i> Tambah</button>
                  </form>
                </div>
              </div><!-- /.box -->
			  
<!-- jQuery 2.1.4 -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='../plugins/fastclick/fastclick.min.js'></script>