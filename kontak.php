<?php require_once('config/main.php'); 
$query=mysql_query("select * from kontak");
$data = mysql_fetch_array($query);
?>
			  <div class='box-info'>
                <div class='box-header'>
                  <h1 class='box-title'><strong><u>Kontak Person GIMMIE Drink</u></strong></h1>                  
                </div><!-- /.box-header -->               
              </div><!-- /.box -->
			  <div class="box box-info">
				 <div class="box-body">
                    <div class="form-group">
					  <div class="col-sm-2">
						  <i class="fa fa-phone"></i> &nbsp;
						<label class="control-label">Telepon</label>					  
					  </div>                      
                      <div class="col-sm-10">                        
						<label class="control-label"><?php echo $data['no_telp']; ?></label>
                      </div>
                    </div>
					<div class="form-group">
                      <div class="col-sm-2">
						  <i class="fa fa-whatsapp"></i> &nbsp;
						<label class="control-label">Whatsapp</label>					  
					  </div>					  					  					  					  		  
                      <div class="col-sm-10">                      
						<label class="control-label"><?php echo $data['no_wa']; ?></label>
                      </div>
                    </div>
					<div class="form-group">
                      <div class="col-sm-2">
						<i class="fa fa-smile-o"></i> &nbsp;
						<label class="control-label">PIN BB</label>					  
					  </div>					  					  					  
                      <div class="col-sm-10">                        
						<label class="control-label"><?php echo $data['pin']; ?></label>
                      </div>
                    </div>
					<div class="form-group">
                      <div class="col-sm-2">
						<i class="fa fa-facebook-square"></i> &nbsp;
						<label class="control-label">Facebook</label>					  
					  </div>					  					  
                      <div class="col-sm-10">                        
						<label class="control-label"><?php echo $data['fb']; ?></label>
                      </div>
                    </div>
					<div class="form-group">
                      <div class="col-sm-2">
						<i class="fa fa-instagram"></i> &nbsp;
						<label class="control-label">Instagram</label>					  
					  </div>					  
                      <div class="col-sm-10">                        
						<label class="control-label"><?php echo $data['ig']; ?></label>
                      </div>
                    </div>
					<div class="form-group">
                      <div class="col-sm-2">
						<i class="fa fa-street-view"></i> &nbsp;
						<label class="control-label">Alamat</label>					  
					  </div>
                      <div class="col-sm-10">                        
						<label class="control-label"><?php echo $data['alamat']; ?></label>
                      </div>
                    </div>
			  </div>
			  

