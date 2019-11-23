			  <div class='box box-info'>
                <div class='box-header'>
                  <h2 class='box-title'><strong>Buku Tamu</strong></h2>                  
                </div><!-- /.box-header -->
                <div class='box-body pad'>
				<?php echo date('Y-m-d'); ?>
                  <form class="form-horizontal" role="form" method="post" action="send.php">
					<div class="box-body">
                    <div class="form-group">
                      <label for="nama" class="col-sm-1 control-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                      </div>
                    </div>
					
					<div class="form-group">
					  <label for="pesan" class="col-sm-1 control-label">Pesan</label>
					  <div class="col-sm-10">
						<textarea id="editor" name="pesan" rows="10" cols="90"> Silahkan sampaikan kritik dan saran anda</textarea>
					  </div>
					</div>
					<br/><br/>
					<button type="submit" name="kirim" class="btn btn-primary pull-left"> <i class="fa fa-envelope"></i> Kirim</button>
                  </form>
                </div>
              </div><!-- /.box -->
			  
<!-- jQuery 2.1.4 -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='../plugins/fastclick/fastclick.min.js'></script>
