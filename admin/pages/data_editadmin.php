<?php require_once('../config/main.php');
$id		= $_GET['id'];
$query	= mysql_query("SELECT * FROM admin WHERE id='$id'");
$data 	= mysql_fetch_array($query);
?>
			  <div class='box box-info'>
                <div class='box-header'>
                  <h2 class='box-title'><strong>Edit Data</strong></h2>                  
                </div><!-- /.box-header -->
                <div class='box-body pad'>
                  <form class="form-horizontal" role="form" method="post" action="pages/model/simpanadmin.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                    <div class="box-body">
                    <div class="form-group has-feedback">						
                      <label class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-7">
                        <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" />
						<span class="glyphicon glyphicon-font form-control-feedback"></span>
                      </div>
                    </div>
					<div class="form-group has-feedback">
                      <label class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-7">
                        <input type="text" name="user" class="form-control" value="<?php echo $data['username']; ?>" />
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
                      </div>
                    </div>
					<div class="form-group has-feedback">
                      <label class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-7">
                        <input type="text" name="pass" class="form-control" value="<?php echo $data['password']; ?>"/>
						<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                      </div>
                    </div>
														
					<br/>
					<button type="submit" name="simpan" class="btn btn-primary pull-left"> <i class="fa fa-save"></i> Simpan</button>
                  </form>
                </div>
              </div><!-- /.box -->
			  
<!-- jQuery 2.1.4 -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='../plugins/fastclick/fastclick.min.js'></script>