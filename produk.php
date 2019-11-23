<?php require_once('config/main.php'); 
$query=mysql_query("select * from produk");
?>
			  
			  <div class='box-info'>
                <div class='box-header'>
                  <h2><strong><u>Produk GIMMIE DRINK</u></strong></h2>                  
                </div><!-- /.box-header -->               
              </div><!-- /.box -->
			  <?php while($data = mysql_fetch_array($query)){?>
			  <div class="box box-info">				 
				 <div class="box-body">				 
				 <table>				 
					<tr>
						<td rowspan="5" width="120px" height="120px" valign="middle" ><?php echo "<center><img src='images/".$data['gambar']."' width='100px' height='100px'></center>"?></td>
					</tr>
					<tr>
						<td><label>Nama Produk</label></td>
						<td><label>&nbsp; : &nbsp;</label></td>
						<td><?php echo $data['nama']; ?></td>
					</tr>
					<tr>
						<td><label>Jenis Produk</label></td>
						<td><label>&nbsp; : &nbsp;</label></td>
						<td><?php echo $data['jenis']; ?></td>
					</tr>
					<tr>
						<td><label>Rasa</label></td>
						<td><label>&nbsp; : &nbsp;</label></td>
						<td><?php echo $data['rasa']; ?></td>
					</tr>
					<tr>
						<td><label>Harga</label></td>
						<td><label>&nbsp; : &nbsp;</label></td>
						<td>Rp.<?php echo number_format($data['harga']); ?></td>
					</tr>				 
				 </table>				 
				 </div>
			  </div>
			  <?php }?>