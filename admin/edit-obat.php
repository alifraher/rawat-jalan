<!-- Fungsi Session -->
<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');	
} else {
	include "../koneksi.php";
?>
<!-- End -->

<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>BIP Klinik</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>

        <script src="lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>


    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">
	
	<!-- Date Picker -->
        <link href="./css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="./css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />

</head>
<body class=" theme-blue">

				<!-- Fungsi Waktu Session -->
				<?php
				$timeout = 10; // Set timeout minutes
				$logout_redirect_url = "../index.php"; // Set logout URL

				$timeout = $timeout * 60; // Converts minutes to seconds
				if (isset($_SESSION['start_time'])) {
					$elapsed_time = time() - $_SESSION['start_time'];
					if ($elapsed_time >= $timeout) {
						session_destroy();
						echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
					}
				}
				$_SESSION['start_time'] = time();
				?>
				<?php } ?>
				<!-- End -->

    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
  <!--<![endif]-->

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="index.php"><span class="navbar-brand"><span class="fa fa-medkit"></span> BIP Klinik</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['fullname']; ?>
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="../logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
    

    <div class="sidebar-nav">
    <ul>
    <li><a href="index.php" class="nav-header"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
    

    <li><a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Pasien<i class="fa fa-collapse"></i></a></li>
        <li><ul class="legal-menu nav nav-list collapse">
            <li ><a href="pasien.php"><span class="fa fa-caret-right"></span> Data Pasien</a></li>
            <li ><a href="tambah-pasien.php"><span class="fa fa-caret-right"></span> Tambah Pasien</a></li>
    </ul></li>

        <li><a href="#" data-target=".dokter-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Dokter<i class="fa fa-collapse"></i></a></li>
        <li><ul class="dokter-menu nav nav-list collapse">
            <li ><a href="dokter.php"><span class="fa fa-caret-right"></span> Data Dokter</a></li>
            <li ><a href="tambah-dokter.php"><span class="fa fa-caret-right"></span> Tambah Dokter</a></li>
    </ul></li>

              <li><a href="#" data-target=".obat-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Obat<i class="fa fa-collapse"></i></a></li>
        <li><ul class="obat-menu nav nav-list collapse">
            <li ><a href="obat.php"><span class="fa fa-caret-right"></span> Data Obat</a></li>
            <li ><a href="tambah-obat.php"><span class="fa fa-caret-right"></span> Tambah Obat</a></li>
    </ul></li>
	
	 <li><a href="#" data-target=".rekap-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Rekap Medis<i class="fa fa-collapse"></i></a></li>
        <li><ul class="rekap-menu nav nav-list collapse">
            <li ><a href="rekap.php"><span class="fa fa-caret-right"></span> Data Rekap Medis</a></li>
            <li ><a href="tambah-rekap.php"><span class="fa fa-caret-right"></span> Tambah Rekap Medis</a></li>
    </ul></li>
            	
             <li><a href="user.php" class="nav-header"><i class="fa fa-fw fa-comment"></i> User</a></li>
			 
				 <li><a href="#" data-target=".cetak-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-desktop"></i> Cetak Laporan<i class="fa fa-collapse"></i></a></li>
        <li><ul class="cetak-menu nav nav-list collapse">
            <li ><a href="cetak-rekap.php"><span class="fa fa-caret-right"></span> Laporan Rekap Medis</a></li>
            <li ><a href="cetak-pasien.php"><span class="fa fa-caret-right"></span> Laporan Data Pasien</a></li>
			<li ><a href="cetak-dokter.php"><span class="fa fa-caret-right"></span> Laporan Data Dokter</a></li>
            <li ><a href="cetak-obat.php"><span class="fa fa-caret-right"></span> Laporan Data Obat</a></li>
    </li> </ul>
    </div>

    <div class="content">
        <div class="header">
            <div class="stats">
    <p class="stat"><span class="label label-info">
	
	<!-- Fungsi Menampilkan Total Pasien dari Database -->
	<b><?php $tampil=mysqli_query($koneksi, "select * from tb_pasien order by id_pasien desc");
		$total=mysqli_num_rows($tampil);
		?>
		<?php echo "$total"; ?>
		<!-- End --></span> Pasien</p>
		
    <p class="stat"><span class="label label-success">
	<!-- Fungsi Menampilkan Total Dokter dari Database -->
	<b><?php $tampil=mysqli_query($koneksi, "select * from tb_dokter order by id_dokter desc");
		$total=mysqli_num_rows($tampil);
		?>
		<?php echo "$total"; ?>
		<!-- End --></span> Dokter</p>
		
    <p class="stat"><span class="label label-danger">
	<!-- Fungsi Menampilkan Total Obat dari Database -->
	<b><?php $tampil=mysqli_query($koneksi, "select * from tb_obat order by id_obat desc");
		$total=mysqli_num_rows($tampil);
		?>
		<?php echo "$total"; ?>
		<!-- End --></span> Obat</p>
</div>

            <h1 class="page-title">Tambah Data Obat</h1>
                    <ul class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Tambah Data Obat</li>
        </ul>

        </div>    

					 <!-- Fungsi Memasukkan Data kedalam Database -->
							<?php
							$query = mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE id_obat='$_GET[kd]'");
							$data  = mysqli_fetch_array($query);
							?>
					<!-- End -->		
						  
						  
<div class="row">
   
     <div class="col-md-12 col-sm-12">
                    
                         <div class="alert alert-default alert-gradient alert-dismissible fade in" role="alert">
                           <strong><h4> Edit Data Obat</h4></strong>
                        </div>
						  
						  <!-- Fungsi Form Tambah Data Kasir -->
                            <div class="panel-body">
                              <div class="form">
                                  <form class="form-horizontal style-form" action="update-obat.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
									
									<div class="form-group ">
                                          <label for="id_obat" class="control-label col-lg-2">ID Obat </label>
                                          <div class="col-lg-2">
                                              <input class="form-control" id="id_obat" type="text" name="id_obat" value="<?php echo $data['id_obat'];?>" readonly="readonly" autofocus="on"/>
                                          </div>
                                      </div>
									  
									<div class="form-group ">
                                          <label for="nama_obat" class="control-label col-lg-2">Nama Obat</label>
                                          <div class="col-lg-4">
                                              <input class="form-control" id="nama_obat" name="nama_obat" type="text" value="<?php echo $data['nama_obat'];?>" />
                                          </div>
                                      </div>
                                     
                                      <div class="form-group">
										  <label class="col-sm-2 col-sm-2 control-label">Jenis Obat</label>
										  <div class="col-sm-3">
										  <select name="jenis_obat" class="form-control">
										  <option value=""> -- Pilih Jenis Obat -- </option>
												<option value="Puyer"> Puyer </option>
												<option value="Cair"> Cair </option>
												<option value="Tablet"> Tablet </option>
												<option value="Tetes"> Tetes </option>
												<option value="Kapsul"> Kapsul </option>
										  </select>
										  </div>
									  </div>
									
									<div class="form-group">
										  <label class="col-sm-2 col-sm-2 control-label">Kategori</label>
										  <div class="col-sm-3">
										  <select name="kategori" class="form-control">
										  <option value=""> -- Pilih Kategori -- </option>
												<option value="Gigi"> Gigi </option>
												<option value="THT"> THT </option>
												<option value="Mata"> Mata </option>
												<option value="Kulit"> Kulit </option>
												<option value="Alergi"> Alergi </option>
										  </select>
										  </div>
									  </div>		
									  
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <a class="btn btn-default" type="button" href="obat.php">Cancel</a>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
						<!-- End -->
						  
                        </div>
						
					
                  </div>
    
          
          
      </div>
   
</div>



            <footer>
                <hr>

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right"> <a href="index.php" target="_blank">Created </a> by <a href="http://www.span-community.com" target="_blank">SPAN Community</a></p>
                <p>© 2017 <a href="index.php" target="_blank">Sistem Rawat Jalan</a></p>
            </footer>
        </div>
    </div>

	<!-- daterangepicker -->
        <script src="./js/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="./js/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
		<script>
		//options method for call datepicker
		$(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
		</script>


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  
</body></html>
