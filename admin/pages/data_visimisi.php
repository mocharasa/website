<?php require_once('../config/main.php'); 
$query=mysql_query("select * from profil");
$data = mysql_fetch_array($query);
?>
			  <div class='box box-info'>
                <div class='box-header'>
                  <h2 class='box-title'><strong>Halaman Editor Visi & Misi</strong></h2>                  
                </div><!-- /.box-header -->
                <div class='box-body pad'>
                  <form role="form" method="post" action="pages/model/visimisi.php">
                    <textarea id="editor1" name="visimisi" rows="10" cols="80">
                      <?php echo $data['visimisi']; ?>
                    </textarea>
					<br/>
					<button type="submit" name="simpan" class="btn btn-primary pull-right"> <i class="fa fa-save"></i> Simpan</button>
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