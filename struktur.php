<?php require_once('config/main.php'); 
$query=mysql_query("select * from profil");
$data = mysql_fetch_array($query);
?>
			  <div class='box-info'>
                <div class='box-header'>
                  <h1 class='box-title'><strong><u>Struktur Organisasi GIMMIE Drink</u></strong></h1>                  
                </div><!-- /.box-header -->               
              </div><!-- /.box -->
			  <div class="box box-info">
				 <div class='box-body pad'>
                  
                      <?php echo $data['struktur']; ?>
                   
                </div>
			  </div>
			  
<!-- jQuery 2.1.4 -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='../plugins/fastclick/fastclick.min.js'></script>
