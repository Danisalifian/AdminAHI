<?php
	session_start();
	include('../library/library.php');

	if (!isset($_SESSION['uname'])) {
		echo '<script>window.alert("Maaf, Anda harus login dahulu!");window.location=("../index.php");</script>';				
	} else {
		include("../controllers/customerControllers.php");
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
	                <h3 class="page-title">Data Barang</h3>
	              </div>
	            </div>

	            <!-- Main Content -->
	            <!-- Modal Tambah data Barang -->
	            <!-- Button trigger -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#BarangModal">
				  Tambah Barang
				</button>

				<!-- Modal -->
				<div class="modal fade" id="BarangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Data Barang</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <form id="frmBarang" method="POST" action="../controllers/customerControllers.php">
				      <div class="modal-body">				      
			      		<div class="row">
    						<div class="col-sm-4 pt-2">
    							<label>Id Barang </label>
    						</div>
    						<div class="col">
        						<input type="number" name="mIdb" class="form-control" placeholder="Id Barang" required>
    						</div>
    					</div>
    					<div class="row pt-2">
    						<div class="col-sm-4 pt-2">
    							<label>Nama Barang</label>
    						</div>
    						<div class="col">
        						<input type="text" name="mNama" class="form-control" placeholder="Nama Barang" required>
    						</div>
    					</div>
    					<div class="row pt-2">
    						<div class="col-sm-4 pt-2">
    							<label>Detail</label>
    						</div>
    						<div class="col">
        						<input type="text" name="mdetail" class="form-control" placeholder="Detail Barang" required>
    						</div>
    					</div>
    					<div class="row pt-2">
    						<div class="col-sm-4 pt-2">
    							<label>Harga</label>
    						</div>
    						<div class="col">
        						<input type="number" name="mharga" class="form-control" placeholder="Harga Barang" required>
    						</div>
    						<div class="row pt-2">
    						<div class="col-sm-4 pt-2">
    							<label>Stock</label>
    						</div>
    						<div class="col">
        						<input type="text" name="mstock" class="form-control" placeholder="Stock Barang" required>
    						</div>
    					</div>
					    </div>
					    <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					        <button type="submit" class="btn btn-primary" name="btnMsimpan" id="btnMsimpan">Simpan</button>
					    </div>
				      </form>
				    </div>
				  </div>
				</div>
				<!-- End Modal Tambah Data Barang -->

				
	                      

	            <!-- Tabel Data Barang -->
	            <div class="pt-3">
	            	<div class="card card">
	            		<div class="card-header border-bottom">
	            			<h6 class="m-0">Daftar Barang</h6>
	            		</div>
	            		<div class="card-body pt-2 p-2">
	            			<table id="tabel_customer" class="table table-striped table-bordered mb-0">
					        <thead class="bg-light">
					            <th scope="col" class="border-0">Id Barang</th>
		                        <th scope="col" class="border-0">Nama Barang</th>
		                        <th scope="col" class="border-0">Detail</th>
		                        <th scope="col" class="border-0">Harga</th>
		                        <th scope="col" class="border-0">Stok Barang</th>
					        </thead>
					        <tbody>
					        <?php while($fetchCustomer=mysqli_fetch_array($getData)){ ?>
					            <tr>
					                <td><?= $fetchCustomer["id_barang"] ?></td>
			                        <td><?= $fetchCustomer["nama"] ?></td>
			                        <td><?= $fetchCustomer["detail"] ?></td>
			                        <td><?= $fetchCustomer["harga"] ?></td>
			                        <td><?= $fetchCustomer["stock_barang"] ?></td>
			                        <td>
			                        	<!-- Info Barang -->
			                        	<button type="button" class="btn btn-sm btn-outline-info"><i class="material-icons" data-toggle="modal" data-target="#Info<?= $fetchBarang["id_barang"]?>">info</i></button>
			                        	<!-- Modal Info -->
										<div class="modal fade" id="Info<?= $fetchBarang["id_barang"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel">Data Barang</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <form id="frmCust" method="POST" action="">
										      <div class="modal-body">				      
									      		<div class="row pt-2">
						    						<div class="col-sm-3 pt-2">
						    							<label>Id Barang</label>
						    						</div>
						    						<div class="col">
						        						<input type="number" name="Ideb" class="form-control" value="<?= $fetchBarang["id_barang"] ?>" disabled>
						    						</div>
						    					</div>
						    					<div class="row pt-2">
						    						<div class="col-sm-3 pt-2">
						    							<label>Nama</label>
						    						</div>
						    						<div class="col">
						        						<input type="text" name="INama" class="form-control" value="<?= $fetchBarang["nama"] ?>" disabled>
						    						</div>
						    					</div>
						    					<div class="row pt-2">
						    						<div class="col-sm-3 pt-2">
						    							<label>Detail</label>
						    						</div>
						    						<div class="col">
						        						<input type="text" name="IDetail" class="form-control" value="<?= $fetchBarang["detail"] ?>" disabled>
						    						</div>
						    					</div>

						    					<div class="row pt-2">
						    						<div class="col-sm-3 pt-2">
						    							<label>Harga</label>
						    						</div>
						    						<div class="col">
						        						<input type="number" name="IHarga" class="form-control" value="<?= $fetchBarang["harga"] ?>" disabled>
						    						</div>
						    					</div>

						    					<div class="row pt-2">
						    						<div class="col-sm-3 pt-2">
						    							<label>Stock</label>
						    						</div>
						    						<div class="col">
						        						<input type="number" name="Istock" class="form-control" value="<?= $fetchBarang["stock_barang"] ?>" disabled>
						    						</div>
						    					</div>
						    		
						
											    </div>
											    <div class="modal-footer">
											        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
											        <button type="submit" class="btn btn-primary" name="btnUbah">Perbarui</button> -->
											    </div>
										      </form>
										    </div>
										  </div>
										</div>
										<!-- End Modal Info -->
			                        	<!-- Ubah data customer -->
			                        	<button type="button" name="btnKUbah" class="btn btn-sm btn-outline-info"><i class="material-icons" data-toggle="modal" data-target="#Ubah<?= $fetchBarang["id_barang"]?>">edit</i></button>
			                        	<!-- Modal Ubah data Info Customer -->
										<div class="modal fade" id="Ubah<?= $fetchBarang["id_barang"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel">Perbarui Data Barang</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <form id="frmCust" method="POST" action="../controllers/customerControllers.php">
										      <div class="modal-body">				      
									      		<div class="row">
						    						<div class="col-sm-3">
						    							<label>Nama</label>
						    						</div>
						    						<div class="col">
						    							<input type="hidden" name="UKtp" value="<?= $fetchCustomer["no_ktp"] ?>">
						        						<input type="text" name="UNama" class="form-control" required value="<?= $fetchCustomer["nama"] ?>">
						    						</div>
						    					</div>						    					
						    					<div class="row pt-2">
						    						<div class="col-sm-3 pt-2">
						    							<label>Detail</label>
						    						</div>
						    						<div class="col">
						        						<input type="text" name="UDetail" class="form-control" value="<?= $fetchBarang["detail"] ?>">
						    						</div>
						    					</div>

						    					<div class="row pt-2">
						    						<div class="col-sm-3 pt-2">
						    							<label>Harga</label>
						    						</div>
						    						<div class="col">
						        						<input type="number" name="UHarga" class="form-control" value="<?= $fetchBarang["harga"] ?>">
						    						</div>
						    					</div>
						    					
						    					<div class="row pt-2">
						    						<div class="col-sm-3 pt-2">
						    							<label>Stock</label>
						    						</div>
						    						<div class="col">
						        						<input type="text" name="UStock" class="form-control" value="<?= $fetchBarang["stock_barang"] ?>">
						    						</div>
						    					</div>

											    </div>
											    <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
											        <button type="submit" class="btn btn-primary" name="btnUbah">Perbarui</button>
											    </div>
										      </form>
										    </div>
										  </div>
										</div>
										<!-- End Modal Ubah Data Barang -->
										<!-- Hapus data customer -->
			                          	<button type="button" class="btn btn-sm btn-outline-danger"><i class="material-icons" data-toggle="modal" data-target="#hapus<?=$fetchBarang["id_barang"]?>">delete</i></button>
			                          	<!-- Modal dialog hapus -->
										<form id="hapusCust" method="POST" action="../controllers/customerControllers.php">
										<div class="modal fade" id="hapus<?=$fetchBarang["id_barang"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">				    
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body text-danger">
										      	<input type="hidden" name="hapus_cust" value="<?=$fetchCustomer["no_ktp"]?>">
										        Anda yakin akan menghapus data customer <?=$fetchCustomer["nama"]?> ?
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
										        <button type="submit" class="btn btn-primary" name="btnHapus" id="btnHapus">Ya</button>
										      </div>				  	
										    </div>
										  </div>
										</div>
										</form>
							            <!-- End modal dialog hapus  -->
			                        </td>
					            </tr>
					        <?php } ?>			       
					        </tbody>
					        <tfoot>
					            <tr>
						            <td><?= $fetchCustomer["id_barang"] ?></td>
			                        <td><?= $fetchCustomer["nama"] ?></td>
			                        <td><?= $fetchCustomer["detail"] ?></td>
			                        <td><?= $fetchCustomer["harga"] ?></td>
			                        <td><?= $fetchCustomer["stock_barang"] ?></td>
					            </tr>
					        </tfoot>
					    </table>
	            		</div>	            		
	            	</div>	            	
	            </div>
	            <!-- End Tabel Kendaraan -->
	            
	            <!-- End Main Content -->

	            <!-- End Page Header -->

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
	<script type="text/javascript" language="javascript" src="../adm-styles/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="../adm-styles/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="../adm-styles/js/dataTables.bootstrap4.min.js"></script>

	<script type="text/javascript" class="init">	
		$(document).ready(function() {
			$('#tabel_customer').DataTable();
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
	            // document.write("<div><strong>Maaf.</strong> Data tidak ditemukan</div>");
	            // tr[i].innerHTML = "<div><strong>Maaf.</strong> Data tidak ditemukan</div>";
	          }
	        }       
	      }
		}
	</script>
	
	<script src="../adm-styles/js/popper.min.js"></script>
    <script src="../adm-styles/js/bootstrap.min.js"></script>
    <script src="../adm-styles/js/Chart.min.js"></script>
    <script src="../adm-styles/js/shards.min.js"></script>
    <script src="../adm-styles/js/jquery.sharrre.min.js"></script>
	<script src="../adm-styles/js/extras.1.0.0.min.js"></script>
    <script src="../adm-styles/js/shards-dashboards.1.0.0.min.js"></script>
    <script src="../adm-styles/js/app/app-blog-overview.1.0.0.js"></script>
    <script type="">
    $('#datepicker-tgl').datepicker({});</script>
</body>
</html>