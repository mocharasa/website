<?php require_once('../config/main.php');
$query=mysql_query("SELECT * FROM bukutamu WHERE id='$_GET[id]'");
$data = mysql_fetch_array($query);
?>

			  <div class='box box-info'>                
                <div class='box-body pad'>				
                  <form class="form-horizontal" role="form" method="post" action="send.php">
					<div class="box-body">
                    <div class="form-group">
                      <label for="nama" class="col-sm-1 control-label">Nama</label>
                      <div class="col-sm-8">
                        <label class="control-label"><?php echo $data['nama'];?></label>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="nama" class="col-sm-1 control-label">Tanggal</label>
                      <div class="col-sm-8">
                        <label class="control-label"><?php echo $data['tgl'];?></label>
                      </div>
                    </div>
					<div class="form-group">
					  <label for="pesan" class="col-sm-1 control-label">Pesan</label>
					  <div class="col-sm-11">
						<label><?php echo $data['pesan'];?></label>
					  </div>
					</div>					
                  </form>
                </div>
              </div><!-- /.box -->
			  
<!-- jQuery 2.1.4 -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='../plugins/fastclick/fastclick.min.js'></script>
