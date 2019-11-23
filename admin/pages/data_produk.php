<?php require_once('../config/main.php'); 
$query=mysql_query("select * from produk");
?>

			<div class="box">
                <div class="box-header">
                  <h3 class="box-title"> <a class="btn btn-success" href="./?page=data_tambahproduk">Tambah</a> </h3>
                </div><!-- /.box-header -->
                <div class="box-body">					
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Nama Produk</th>
                        <th>Jenis Produk</th>
						<th>Varian Rasa</th>
						<th>Harga</th>
						<th></th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
					  $no=1;
					  while($q=mysql_fetch_array($query)){
					?>
                      <tr>
						<td><?php echo "<center><img src='../images/".$q['gambar']."' width='100' height='100'></center>"?></td>          
						<td><?php echo $q['nama']?></td>
						<td><?php echo $q['jenis']?></td>
						<td><?php echo $q['rasa']?></td>
						<td><?php echo $q['harga']?></td>						
						<td>
							<center>
							<a class="btn btn-success" href="index.php?page=data_editproduk&id=<?php echo $q['id']; ?>">Edit</a>
							<a class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="pages/model/hapusproduk.php?id=<?php echo $q['id']; ?>">Hapus</a>
							</center>
						</td>						
					  </tr>
					<?php
					  }
					?>                 
                    </tbody>                    
                  </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
 