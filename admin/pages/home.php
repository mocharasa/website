<?php include('../config/main.php');
$data_pembelian = mysql_query("select * from produk");
$data_teknisi	= mysql_query("select * from bukutamu");
$data_user		= mysql_query("select * from admin");
 ?>
<div class="row">
	<div class="col-md-6">
	  <!-- Bar chart -->
	  <div class="box box-primary">
	    <div class="box-header">
	      <i class="fa fa-bar-chart-o"></i>
	      <h3 class="box-title">Grafik Batang</h3>
	    </div>
	    <div class="box-body">
	      <div id="bar-chart" style="height: 300px;"></div>
	    </div><!-- /.box-body-->
	  </div><!-- /.box -->
	</div>
	<div class="col-md-6">
		<div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-bar-chart-o"></i>
              <h3 class="box-title">Grafik Donut</h3>
            </div>
            <div class="box-body">
              <div id="donut-chart" style="height: 300px;"></div>
            </div><!-- /.box-body-->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div>