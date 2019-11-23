<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GIMMIE | Drink</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
	<!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
	.carousel{
		background: #2f4357;
		margin-top: 10px;		
	}
	.carousel .item{
		min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
	}
	.carousel .item img{
		margin: 0 auto; /* Align slide image horizontally center */
	}
	.bs-example{
		margin: 10px;
	}
	</style>
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">               
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="index.php" class="navbar-brand"><b>GIMMIE</b> DRINK</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFIL <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="./?page=sejarah">Sejarah</a></li>
					<li><a href="./?page=visimisi">Visi Misi</a></li>
                    <li><a href="./?page=struktur">Struktur Organisasi</a></li>                    
                    <li class="divider"></li>
                    <li><a href="./?page=tentang">Tentang</a></li>                    
                  </ul>
                </li>
				<li class="active"><a href="./?page=produk">PRODUK <span class="sr-only">(current)</span></a></li>
                <li><a href="./?page=bukutamu">BUKU TAMU</a></li>
				<li><a href="./?page=kontak">KONTAK</a></li>                
              </ul>                                    
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <li>
                    <!-- Menu toggle button -->
                    <a href="login.php">
                      <i class="fa fa-user"></i>
                      <label>Login</label>
                    </a>
                  </li><!-- /.messages-menu -->

                  <!-- Search Menu -->
                  <li>                    
                    <form action="#" method="get" class="sidebar-form">
						<div class="input-group">
						  <input type="text" name="search" class="form-control" placeholder="Search..."/>
						  <span class="input-group-btn">
							<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
						  </span>
						</div>
					</form>  
                  </li>
                </ul>
              
			  </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
                        
          </section>

          <!-- Main content -->
          <section class="content">
            <!-- Small boxes (Stat box) -->
			  <?php 
			  if (!isset($_GET['page'])) {
				require_once('slider.php');
			  }
			  ?>
			  <!-- main row -->
			  <div class='row'>
				<div class='col-lg-12'>
				  <?php require_once('tampilan.php'); ?>
				</div><!-- /.col-->
			  </div><!-- ./row -->
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      
	  <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>GIMMIE</b> DRINK
          </div>
          <strong>Copyright &copy; 2019 
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="plugins/bootstrap-slider/bootstrap-slider.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
	<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>    
    <script type="text/javascript">
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>
  </body>
</html>
