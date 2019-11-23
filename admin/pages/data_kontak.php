<?php require_once('../config/main.php'); 
$query=mysql_query("select * from kontak");
$data = mysql_fetch_array($query);
?>
			  <div class='box box-info'>
                <div class='box-header'>
                  <h2 class='box-title'><strong>Halaman Editor Kontak</strong></h2>                  
                </div><!-- /.box-header -->
                <div class='box-body pad'>
                  <form class="form-horizontal" role="form" method="post" action="pages/model/kontak.php">
                    <div class="box-body">
                    <div class="form-group has-feedback">
                      <label for="no_telp" class="col-sm-2 control-label">No Telepon</label>
                      <div class="col-sm-7">
                        <input type="text" name="no_telp" class="form-control" value="<?php echo $data['no_telp']; ?>">
						<span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                      </div>
                    </div>
					<div class="form-group has-feedback">
                      <label for="no_wa" class="col-sm-2 control-label">No Whatsapp</label>
                      <div class="col-sm-7">
                        <input type="text" name="no_wa" class="form-control" value="<?php echo $data['no_wa']; ?>">
						<span class="glyphicon glyphicon-phone form-control-feedback"></span>
                      </div>
                    </div>
					<div class="form-group has-feedback">
                      <label class="col-sm-2 control-label">PIN BB</label>
                      <div class="col-sm-7">
                        <input type="text" name="pin" class="form-control" value="<?php echo $data['pin']; ?>">
						<span class="glyphicon glyphicon-phone form-control-feedback"></span>
                      </div>
                    </div>
					<div class="form-group has-feedback">
                      <label class="col-sm-2 control-label">Facebook</label>
                      <div class="col-sm-7">
                        <input type="text" name="fb" class="form-control" value="<?php echo $data['fb']; ?>">
						<span class="glyphicon glyphicon-globe form-control-feedback"></span>
                      </div>
                    </div>
					<div class="form-group has-feedback">
                      <label class="col-sm-2 control-label">Instagram</label>
                      <div class="col-sm-7">
                        <input type="text" name="ig" class="form-control" value="<?php echo $data['ig']; ?>">
						<span class="glyphicon glyphicon-globe form-control-feedback"></span>
                      </div>
                    </div>
					<div class="form-group has-feedback">
                      <label class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-7">
                        <textarea id="editor1" name="alamat" rows="10" cols="80">
							<?php echo $data['alamat']; ?>
						</textarea>
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
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>    
    <script type="text/javascript">
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>