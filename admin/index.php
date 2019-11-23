<?php require_once("auth.php"); ?>
<?php include('../config/main.php');
$data_pembelian = mysql_query("select * from produk");
$data_teknisi	= mysql_query("select * from bukutamu");
$data_user		= mysql_query("select * from admin");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GIMMIE Drink - <?php require('get_title.php'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../dist/css/fa/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- DATA TABLES -->
    <link href="../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
	<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>G</b>D</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>GIMMIE</b> Drink</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        </nav>    
	  </header>
      
	  <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU NAVIGASI</li>
            <li>
              <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>              
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Profil</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="./?page=data_sejarah"><i class="fa fa-circle-o"></i> Sejarah</a></li>
                <li><a href="./?page=data_visimisi"><i class="fa fa-circle-o"></i> Visi Misi</a></li>
                <li><a href="./?page=data_struktur"><i class="fa fa-circle-o"></i> Struktur Organisasi</a></li>
                <li><a href="./?page=data_tentang"><i class="fa fa-circle-o"></i> Tentang</a></li>
              </ul>
            </li>
            <li>
              <a href="./?page=data_produk">
                <i class="fa fa-shopping-cart"></i> <span>Produk</span> 
              </a>
            </li>                        
			<li>
              <a href="./?page=data_bukutamu">
                <i class="fa fa-book"></i> <span>Buku Tamu</span> 
              </a>
            </li>   
			<li>
              <a href="./?page=data_kontak">
                <i class="fa fa-phone"></i> <span>Kontak</span> 
              </a>
            </li> 
			
            <li class="header">MENU ADMIN</li>
			<li>
              <a href="./?page=admin">
                <i class="fa fa-user"></i> <span>Manajemen Admin</span> 
              </a>
            </li>
			<li>
              <a href="logout.php">
                <i class="fa fa-sign-out"></i> <span>Logout</span> 
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php 
				require_once('get_title.php'); 
				echo $title;
			?>
          </h1>          
        </section>

        <!-- Main content -->
        <section class="content">
		  <!-- Small boxes (Stat box) -->
          <?php 

          if (!isset($_GET['page'])) {
            require_once('info.php');
          }
		  ?>
		  <!-- main row -->
          <div class='row'>
            <div class='col-md-12'>
              <?php require_once('views.php'); ?>
            </div><!-- /.col-->
          </div><!-- ./row -->
        </section><!-- /.content -->
      </div>
	  <!-- /.content-wrapper -->
	  
	  <!-- footer begin -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>GIMMIE</b> Drink
        </div>
        <strong>Copyright &copy; <?php echo date('Y');?></strong>
      </footer>
	  <!-- footer end -->
	  
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->


    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<!-- DATA TABES SCRIPT -->
    <script src="../plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
	
	<script src="../plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
	<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
	<script src="../plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
	<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
	<script src="../plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
	<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
	<script src="../plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
	<!-- ChartJS 1.0.1 -->
	<script src="../plugins/chartjs/Chart.min.js" type="text/javascript"></script>
	<!-- Morris.js charts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="../plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js" type="text/javascript"></script>    
	<!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script> 
	
	<script type="text/javascript">
	$(document).ready(function() {
		/*
         * BAR CHART
         * ---------
         */

        var bar_data = {
          data: [["Data Admin", <?php echo mysql_num_rows($data_user); ?>], ["Data Produk", <?php echo mysql_num_rows($data_pembelian); ?>], ["Data Respon Pengunjung", <?php echo mysql_num_rows($data_teknisi); ?>]],
          color: "#00A3CB"
        };
        $.plot("#bar-chart", [bar_data], {
          grid: {
            borderWidth: 1,
            borderColor: "#f3f3f3",
            tickColor: "#F39C12"
          },
          series: {
            bars: {
              show: true,
              barWidth: 0.5,
              align: "center"
            }
          },
          xaxis: {
            mode: "categories",
            tickLength: 0
          }
        });
        /* END BAR CHART */

        /*
         * DONUT CHART
         * -----------
         */

        var donutData = [
          {label: "Data Admin", data: <?php echo mysql_num_rows($data_user); ?>, color: "#00C0EF"},
          {label: "Data Produk", data: <?php echo mysql_num_rows($data_pembelian); ?>, color: "#00A65A"},
          {label: "Buku<br/>Tamu", data: <?php echo mysql_num_rows($data_teknisi); ?>, color: "#F39C12"}          
        ];
        $.plot("#donut-chart", donutData, {
          series: {
            pie: {
              show: true,
              radius: 1,
              innerRadius: 0.5,
              label: {
                show: true,
                radius: 2 / 3,
                formatter: labelFormatter,
                threshold: 0.1
              }

            }
          },
          legend: {
            show: false
          }
        });
        /*
         * END DONUT CHART
         */
         function labelFormatter(label, series) {
        	return "<div style='font-size:11px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>"
                + label
                + "<br/>"
                + Math.round(series.percent) + "%</div>";
      }
	});	
	</script>

  </body>
</html>
