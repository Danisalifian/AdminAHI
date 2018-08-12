<?php

	function head(){
		echo "<head>
		<meta charset='utf-8'>
		<meta http-equiv='x-ua-compatible' content='ie=edge'>
		<title>D'RentCar | Admin Dashboard</title>
		<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
		<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
		<link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
	    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
		<link rel='stylesheet' href='../adm-styles/css/bootstrap.min.css'>
		<link rel='stylesheet' id='main-stylesheet' data-version='1.0.0' href='../adm-styles/css/shards-dashboards.1.0.0.min.css'>
	    <link rel='stylesheet' href='../adm-styles/css/extras.1.0.0.min.css'>
	    <script async defer src='https://buttons.github.io/buttons.js'></script>
	    <link rel='stylesheet' type='text/css' href='../adm-styles/css/dataTables.bootstrap4.min.css'>
		<style type='text/css' class='init'>
		
		</style>
	<head>";
	}

	function navbar(){
		echo "<!-- Main Sidebar -->
	        <aside class='main-sidebar col-12 col-md-3 col-lg-2 px-0'>
	          <div class='main-navbar'>
	            <nav class='navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0'>
	              <a class='navbar-brand w-100 mr-0' href='dashboard.php' style='line-height: 25px;'>
	                <div class='d-table m-auto'>
	                  <img id='main-logo' class='d-inline-block align-top mr-1' style='max-width: 25px;' src='../adm-styles/assets/shards-dashboards-logo.svg' alt='Shards Dashboard'>
	                  <span class='d-none d-md-inline ml-1'>D'RentCar Dashboard</span>
	                </div>
	              </a>
	              <a class='toggle-sidebar d-sm-inline d-md-none d-lg-none'>
	                <i class='material-icons'>&#xE5C4;</i>
	              </a>
	            </nav>
	          </div>
	          <div class='nav-wrapper'>
	            <ul class='nav flex-column'>
	              <li class='nav-item'>
	                <a class='nav-link ' href='dashboard.php'>
	                  <i class='material-icons'>dashboard</i>
	                  <span>Dashboard</span>
	                </a>
	              </li>
	              <li class='nav-item'>
	                <a class='nav-link' href='kendaraan.php'>
	                  <i class='material-icons'>commute</i>
	                  <span>Data Kendaraan</span>
	                </a>
	              </li>
	              <li class='nav-item'>
	                <a class='nav-link ' href='customer.php'>
	                  <i class='material-icons'>people</i>
	                  <span>Data Customer</span>
	                </a>
	              </li>
	              <li class='nav-item'>
	                <a class='nav-link ' href='pembayaran.php'>
	                  <i class='material-icons'>attach_money</i>
	                  <span>Data Pembayaran</span>
	                </a>
	              </li>
	              <li class='nav-item'>
	                <a class='nav-link ' href='penyewaan.php'>
	                  <i class='material-icons'>assignment_turned_in</i>
	                  <span>Data Penyewaan</span>
	                </a>
	              </li>
	              <li class='nav-item'>
	                <a class='nav-link ' href='pengembalian.php'>
	                  <i class='material-icons'>assignment_returned</i>
	                  <span>Data Pengembalian</span>
	                </a>
	              </li>
	            </ul>
	          </div>
	        </aside>
	        <!-- End Main Sidebar -->

	        <!-- Main Right-->
	        <main class='main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3'>
	          <div class='main-navbar sticky-top bg-white'>
	            <!-- Main Navbar -->
	            <nav class='navbar align-items-stretch navbar-light flex-md-nowrap p-0'>
	              <form action='#' class='main-navbar__search w-100 d-none d-md-flex d-lg-flex'>
	                <div class='input-group input-group-seamless ml-3'> 
	                </div>
	              </form>
	              <ul class='navbar-nav border-left flex-row '>
	                
	                <li class='nav-item dropdown'>
	                  <a class='nav-link dropdown-toggle text-nowrap px-3' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
	                    <img class='user-avatar rounded-circle mr-2' src='../adm-styles/assets/avatars/admin.png' alt='User Avatar'>
	                    <span class='d-none d-md-inline-block'>Administrator</span>
	                  </a>
	                  <div class='dropdown-menu dropdown-menu-small'>
	                    
	                    <a class='dropdown-item text-danger' href='../controllers/logoutControllers.php'>
	                      <i class='material-icons text-danger'>&#xE879;</i> Logout </a>
	                  </div>
	                </li>
	              </ul>
	              <nav class='nav'>
	                <a href='#' class='nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left' data-toggle='collapse' data-target='.header-navbar' aria-expanded='false' aria-controls='header-navbar'>
	                  <i class='material-icons'>&#xE5D2;</i>
	                </a>
	              </nav>
	            </nav>
	          </div>
	          <!-- / .main-navbar -->";
	}
?>