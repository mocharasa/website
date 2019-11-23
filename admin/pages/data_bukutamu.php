<?php require_once('../config/main.php'); 
$query=mysql_query("select * from bukutamu");
?>
<?php 
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}
?>
			<div class="box">
                <div class="box-header">
                  <h3 class="box-title">List data buku tamu</h3>
                </div><!-- /.box-header -->
                <div class="box-body">	

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Pesan</th>                        
						<th></th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
					  $no=1;
					  while($q=mysql_fetch_array($query)){
					?>
                      <tr>
						<td><?php echo $no++; ?></td>          
						<td><?php echo $q['nama']?></td>						
						<td>
							<?php 
								$kalimat = $q['pesan']; 
								$kata = limit_words($kalimat, 11);								
								echo "$kata.......";
							?>
						</td>
						<td>
							<center>
							<a class="btn btn-success" href="index.php?page=data_lihatbuku&id=<?php echo $q['id']; ?>">Lihat</a>
							<a class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="pages/model/hapusbuku.php?id=<?php echo $q['id']; ?>">Hapus</a>
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
 
