<?php
	session_start();
	include('../library/library.php');

	if (!isset($_SESSION['uname'])) {
		echo '<script>window.alert("Maaf, Anda harus login dahulu!");window.location=("../index.php");</script>';				
	} else {
		// include("controllers/kendaraanControllers.php");
		include('../controllers/koneksi.php');
		$link = koneksi();
		$query = "SELECT * FROM admin WHERE username = '".$_SESSION['uname']."'";
		$getUser = mysqli_query($link,$query);

		$fetchUser = mysqli_fetch_array($getUser);

		$count = "select * from penyewaan";
		$Jml = mysqli_query($link,$count);
		$jumlah = mysqli_num_rows($Jml);

		$Mcount = "select * from kendaraan";
		$Mjml = mysqli_query($link,$Mcount);
		$Kendjml = mysqli_num_rows($Mjml);

		$Ccount = "select * from customer";
		$Cjml = mysqli_query($link,$Ccount);
		$Custjml = mysqli_num_rows($Cjml);	
	}
?>
<!DOCTYPE html>
<html class="no-js h-100" lang="en">
	<?php head(); ?>
<body class="h-100">

	<div class="container-fluid">
		<div class="row">
			<!-- Main Sidebar -->
	        	<?php navbar(); ?>
	        <!-- / .main-navbar -->
	          <div class="main-content-container container-fluid px-4">
	            <!-- Page Header -->
	            <div class="page-header row no-gutters py-4">
	              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
	                <!-- <span class="text-uppercase page-subtitle">Dashboard</span> -->
	                <h3 class="page-title">Dashboard</h3>
	              </div>
	            </div>

	            <!-- Main Content -->
	            <!-- Small Stats Blocks -->
	            <div class="pt-1">	            	
		            <div class="row">
		              <div class="col-lg col-md-6 col-sm-6 mb-4">
		                <div class="stats-small stats-small--1 card card-small">
		                  <div class="card-body p-0 d-flex">
		                    <div class="d-flex flex-column m-auto">
		                      <div class="stats-small__data text-center">
		                        <span class="stats-small__label text-uppercase">Jumlah Penyewaan</span>
		                        <h6 class="stats-small__value count my-3"><?php echo "$jumlah"; ?></h6>
		                      </div>
		                      <div class="stats-small__data">
		                        <span class="stats-small__percentage stats-small__percentage--increase"> </span>
		                      </div>
		                    </div>
		                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
		                  </div>
		                </div>
		              </div>
		              <div class="col-lg col-md-6 col-sm-6 mb-4">
		                <div class="stats-small stats-small--1 card card-small">
		                  <div class="card-body p-0 d-flex">
		                    <div class="d-flex flex-column m-auto">
		                      <div class="stats-small__data text-center">
		                        <span class="stats-small__label text-uppercase">Jumlah Kendaraan</span>
		                        <h6 class="stats-small__value count my-3"><?php echo "$Kendjml"; ?></h6>
		                      </div>
		                      <div class="stats-small__data">
		                        <span class="stats-small__percentage "></span>
		                      </div>
		                    </div>
		                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
		                  </div>
		                </div>
		              </div>
		              <div class="col-lg col-md-4 col-sm-6 mb-4">
		                <div class="stats-small stats-small--1 card card-small">
		                  <div class="card-body p-0 d-flex">
		                    <div class="d-flex flex-column m-auto">
		                      <div class="stats-small__data text-center">
		                        <span class="stats-small__label text-uppercase">Jumlah Customer</span>
		                        <h6 class="stats-small__value count my-3"><?php echo "$Custjml"; ?></h6>
		                      </div>
		                      <div class="stats-small__data">
		                        <span class="stats-small__percentage"></span>
		                      </div>
		                    </div>
		                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>
		                  </div>
		                </div>
		              </div>	              
		            </div>		                        	
	            </div>
	          </div>
	          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">	            
	            <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
	              <a href="#" rel="nofollow">AHI</a>
	            </span>
	          </footer>
	        </main>
	        <!-- End Main Right -->
			
		</div>
	</div>

	<!-- SCRIPT -->
	<script src="../adm-styles/js/jquery-3.3.1.min.js"></script>
    <script src="../adm-styles/js/popper.min.js"></script>
    <script src="../adm-styles/js/bootstrap.min.js"></script>
    <script src="../adm-styles/js/Chart.min.js"></script>
    <script src="../adm-styles/js/shards.min.js"></script>
    <script src="../adm-styles/js/jquery.sharrre.min.js"></script>
	<script src="../adm-styles/js/extras.1.0.0.min.js"></script>
    <script src="../adm-styles/js/shards-dashboards.1.0.0.min.js"></script>
    <script src="../adm-styles/js/app/app-blog-overview.1.0.0.js"></script>
</body>
</html>