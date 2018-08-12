<!DOCTYPE html>
<html class="no-js h-100" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>AHI | Admin Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="adm-styles/css/bootstrap.min.css">
		<link rel="stylesheet" id="main-stylesheet" data-version="1.0.0" href="adm-styles/css/shards-dashboards.1.0.0.min.css">
	    <link rel="stylesheet" href="adm-styles/css/extras.1.0.0.min.css">
	    <script async defer src="https://buttons.github.io/buttons.js"></script>
	    <link rel="stylesheet" type="text/css" href="adm-styles/css/dataTables.bootstrap4.min.css">
<body>
<div class="container pt-5">
	<div class="row pt-5">
		<div class="col-md-4 offset-md-4">
			<div class="card card-small">
				<div class="card-header border-bottom">
					<h4 class="m-0 text-center">AHI</h4>
				</div>	
				<div class="card-body">
					<form id="frmLogin" method="POST" action="controllers/loginControllers.php">
						<div class="row pt-2 mr-3 ml-3">
    						<div class="input-group mb-3">
		                        <div class="input-group input-group-seamless">
			                        <span class="input-group-prepend">
				                        <span class="input-group-text">
					                        <i class="material-icons">person</i>
				                        </span>
			                        </span>
			                        <input type="text" class="form-control" name="Uname" placeholder="Username" required> 
		                        </div>
	                        </div>
    					</div>
    					<div class="row pt-2 mr-3 ml-3">
    						<div class="input-group mb-3">
	                         	<div class="input-group input-group-seamless">
		                            <span class="input-group-prepend">
			                            <span class="input-group-text">
				                            <i class="material-icons">lock</i>
			                            </span>
		                            </span>
		                            <input type="password" class="form-control" name="Pass" placeholder="Password" required> 
	                        	</div>
	                        </div>
    					</div>
    					<div class="row pt-2 mr-3 ml-3">
    						<button type="submit" class="btn btn-primary btn-md btn-block" name="btnLogin">Login</button>
    					</div>     					
					</form>
				</div>	
			</div>
		</div>
	</div>
</div>

	<!-- SCRIPT -->
	<script type="text/javascript" language="javascript" src="adm-styles/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="adm-styles/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="adm-styles/js/dataTables.bootstrap4.min.js"></script>

	<script type="text/javascript" class="init">	
		$(document).ready(function() {
			$('#tabel_kendaraan').DataTable();
		} );

	</script>

	<script type="text/javascript">		
		function search(){
			var input, filter, table, tr, td, i;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
		      table = document.getElementById("myTable");
		      tr = table.getElementsByTagName("tr");
	      for (i = 0; i < tr.length; i++) {
	        td = tr[i].getElementsByTagName("td")[2];
	        if (td) {
	          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
	            tr[i].style.display = "";
	          } else {
	            tr[i].style.display = "none";
	          }
	        }       
	      }
		}
	</script>
	
	<script src="adm-styles/js/popper.min.js"></script>
    <script src="adm-styles/js/bootstrap.min.js"></script>
    <script src="adm-styles/js/Chart.min.js"></script>
    <script src="adm-styles/js/shards.min.js"></script>
    <script src="adm-styles/js/jquery.sharrre.min.js"></script>
	<script src="adm-styles/js/extras.1.0.0.min.js"></script>
    <script src="adm-styles/js/shards-dashboards.1.0.0.min.js"></script>
    <script src="adm-styles/js/app/app-blog-overview.1.0.0.js"></script>
</body>
</html>