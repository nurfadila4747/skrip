<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_username"])==""){
	header("location: login.php");
    
    }else{
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
	  $data_level = $_SESSION["ses_level"];
    }

    //KONEKSI DB
    include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SI PBPH DISHUT</title>
	<link rel="icon" href="dist/img/kaltim.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>

</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-green navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<href="index.php" class="nav-link">
					
					<script type="text/javascript">
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour == 0) {
		        curr_hour = 24;
		    }
		 
		    curr_hour   = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		    document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }

		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		
		</script>

		<!-- Menampilkan Hari, Bulan dan Tahun -->
<font color="white" span id="tanggalwaktu"></font> |
<script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>

<font color="white" span id="clock"></font>
 
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="dist/img/kaltim.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .9">
				<span class="brand-text"> <font face="algerian"> SI PBPH DISHUT </font></span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="dist/img/admin.png">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-primary">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->

				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
          if ($data_level=="Administrator"){
          ?>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="fas fa-home mr-2"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-masuk" class="nav-link">
								<i class="nav-icon far fa fa-book"></i>
								<p>
									Kelola Surat
									<span class="badge badge-warning">
										Masuk
									</span>
								</p>
							</a>
						</li>


						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="fas fa-users-cog mr-2"></i>
								<p>
									Kelola Data
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
							<li class="nav-item">
									<a href="?page=data-kh" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Kawasan Hutan</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=data-umum" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Umum PBPH</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=data-pokok" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Pokok PBPH</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=data-berita" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Panduan RKTPH</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=data-brku" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Panduan RKUPH</p>
									</a>
								</li>
								</ul>
				
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="fas fa-file-export mr-2"></i>
								<p>
									Kelola Laporan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=data-izin" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>RKTPH</p>
									</a>
								</li>

								<li class="nav-item">
										<a href="?page=log-izin" class="nav-link">
											<i class="nav-icon far fa-circle text-warning"></i>
											<p>Log RKTPH</p>
										</a>
									</li>
								</ul>
							

						<li class="nav-header">Setting</li>

						<li class="nav-item">
							<a href="?page=data-dprs" class="nav-link">
								<i class="nav-icon far fa fa-bell"></i>
								<p>
									User Perusahaan
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-pengguna" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									User System
								</p>
							</a>
						</li>

						<?php
          				} elseif($data_level=="KepalaSeksi"){
							?>
							<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=ptg-data-kh" class="nav-link">
								<i class="nav-icon far fa fa-book"></i>
								<p>
									Data
									<span class="badge badge-success">
										Kawasan
									</span>
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=ptg-data-umum" class="nav-link">
								<i class="nav-icon far fa fa-book"></i>
								<p>
									Data
									<span class="badge badge-success">
										Umum PBPH
									</span>
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=ptg-data-pokok" class="nav-link">
								<i class="nav-icon far fa fa-book"></i>
								<p>
									Data
									<span class="badge badge-success">
										Pokok PBPH
									</span>
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=ptg-data-izin" class="nav-link">
								<i class="nav-icon far fa fa-book"></i>
								<p>
									Laporan
									<span class="badge badge-warning">
										RKTPH
									</span>
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-koreksi" class="nav-link">
								<i class="nav-icon far fa fa-book"></i>
								<p>
									Koreksi
									<span class="badge badge-warning">
										RKTPH
									</span>
								</p>
							</a>
						</li>
								

						<li class="nav-header">Setting</li>
						

						<?php
							}
						?>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon fas fa-arrow-circle-right"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {
              
				//Pengguna
				case 'data-pengguna':
					include "admin/pengguna/data_pengguna.php";
					break;
				case 'add-pengguna':
					include "admin/pengguna/add_pengguna.php";
					break;
				case 'edit-pengguna':
					include "admin/pengguna/edit_pengguna.php";
					break;
				case 'del-pengguna':
					include "admin/pengguna/del_pengguna.php";
					break;

					//Izin Admin
				case 'data-izin':
					include "admin/dataizin/data_izin.php";
					break;
				case 'add-izin':
					include "admin/dataizin/add_izin.php";
					break;
				case 'edit-izin':
					include "admin/dataizin/edit_izin.php";
					break;
				case 'back-izin':
					include "admin/dataizin/kembali_izin.php";
					break;
				case 'del-izin':
					include "admin/dataizin/del_izin.php";
					break;
				case 'reading':
                include "admin/dataizin/read_rkt.php";
				break;

				 //Data Perusahaan
				 case 'data-dprs':
					include "admin/dprs/data_dprs.php";
					break;
				case 'add-dprs':
					include "admin/dprs/add_dprs.php";
					break;
				case 'edit-dprs':
					include "admin/dprs/edit_dprs.php";
					break;
				case 'del-dprs':
					include "admin/dprs/del_dprs.php";
					break;

				//Admin
				case 'log-izin':
					include "admin/log/data_izin.php";
					break;

				//PTG
				case 'ptg-data-izin':
					include "kepalasks/dataizin/data_izin.php";
					break;
				case 'ptg-add-izin':
					include "kepalasks/dataizin/add_izin.php";
					break;
				case 'ptg-edit-izin':
					include "kepalasks/dataizin/edit_izin.php";
					break;
				case 'ptg-del-izin':
					include "kepalasks/dataizin/del_izin.php";
				case 'ptg-back-izin':
					include "kepalasks/dataizin/kembali_izin.php";
					break;

				//PTG
				case 'ptg-log-izin':
					include "kepalasks/log/data_izin.php";
					break;


				//Umum Admin
				case 'data-umum':
					include "admin/umum/data_umum.php";
					break;
				case 'add-umum':
					include "admin/umum/add_umum.php";
					break;
				case 'edit-umum':
					include "admin/umum/edit_umum.php";
					break;
				case 'del-umum':
					include "admin/umum/del_umum.php";
					break;
				case 'ekspor-umum':
					include "admin/umum/ekspor_umum.php";
					break;
				case 'cetak-umum':
					include "admin/umum/cetak_umum.php";
					break;
				case 'view-umum':
					include "admin/umum/view_umum.php";
					break;

				//Umum PTG
				case 'ptg-data-umum':
					include "kepalasks/umum/data_umum.php";
					break;
				case 'ptg-add-umum':
					include "kepalasks/umum/add_umum.php";
					break;
				case 'ptg-edit-umum':
					include "kepalasks/umum/edit_umum.php";
					break;
				case 'ptg-del-umum':
					include "kepalasks/umum/del_umum.php";
					break;
				case 'ptg-ekspor-umum':
					include "kepalasks/umum/ekspor_umum.php";
					break;
				case 'ptg-cetak-umum':
					include "kepalasks/umum/cetak_umum.php";
					break;
				case 'ptg-view-umum':
					include "kepalasks/umum/view_umum.php";
					break;

				//Kawasan Admin
				case 'data-kh':
					include "admin/kawasan/data_kh.php";
					break;
				case 'add-kh':
					include "admin/kawasan/add_kh.php";
					break;
				case 'edit-kh':
					include "admin/kawasan/edit_kh.php";
					break;
				case 'del-kh':
					include "admin/kawasan/del_kh.php";
					break;
				case 'ekspor-kh':
					include "admin/kawasan/ekspor_kh.php";
					break;
				case 'view-kh':
					include "admin/kawasan/view_kh.php";
					break;	

				//Kawasan PTG
				case 'ptg-data-kh':
					include "kepalasks/kawasan/data_kh.php";
					break;
				case 'ptg-add-kh':
					include "kepalasks/kawasan/add_kh.php";
					break;
				case 'ptg-edit-kh':
					include "kepalasks/kawasan/edit_kh.php";
					break;
				case 'ptg-del-kh':
					include "kepalasks/kawasan/del_kh.php";
					break;
				case 'ptg-ekspor-kh':
					include "kepalasks/kawasan/ekspor_kh.php";
					break;
				case 'ptg-view-kh':
					include "kepalasks/kawasan/view_kh.php";
					break;

                //Data Realisasi
				case 'data-real':
					include "admin/real/data_real.php";
					break;
				case 'add-real':
					include "admin/real/add_real.php";
					break;
				case 'edit-real':
					include "admin/real/edit_real.php";
					break;
				case 'del-real':
					include "admin/real/del_dprs.php";
					break;

				//Pokok Admin
				case 'data-pokok':
					include "admin/pokok/data_pokok.php";
					break;
				case 'cetak-pdf':
					include "admin/pokok/fpdf.php";
					break;
				case 'add-pokok':
					include "admin/pokok/add_pokok.php";
					break;
				case 'edit-pokok':
					include "admin/pokok/edit_pokok.php";
					break;
				case 'del-pokok':
					include "admin/pokok/del_pokok.php";
					break;
				case 'ekspor-pokok':
					include "admin/pokok/ekspor_pokok.php";
					break;
				case 'view-pokok':
					include "admin/pokok/view_pokok.php";
					break;

				//Pokok PTG
				case 'ptg-data-pokok':
					include "kepalasks/pokok/data_pokok.php";
					break;
				case 'ptg-cetak-pdf':
					include "kepalasks/pokok/fpdf.php";
					break;
				case 'ptg-add-pokok':
					include "kepalasks/pokok/add_pokok.php";
					break;
				case 'ptg-edit-pokok':
					include "kepalasks/pokok/edit_pokok.php";
					break;
				case 'ptg-del-pokok':
					include "kepalasks/pokok/del_pokok.php";
					break;
				case 'ptg-ekspor-pokok':
					include "kepalasks/pokok/ekspor_pokok.php";
					break;
				case 'ptg-view-pokok':
					include "kepalasks/pokok/view_pokok.php";
					break;
					
				//suket
				case 'suket-masuk':
					include "surat/suket_masuk.php";
					break;
				case 'suket-lahir':
					include "surat/suket_lahir.php";
					break;
				case 'suket-mati':
					include "surat/suket_mati.php";
					break;
				case 'suket-keluar':
					include "surat/suket_keluar.php";
					break;
				case 'suket-pindah':
					include "surat/suket_pindah.php";
					break;

				//Berita Admin RKT
				case 'data-berita':
					include "admin/berita/data_berita.php";
					break;
				case 'add-berita':
					include "admin/berita/add_berita.php";
					break;
				case 'edit-berita':
					include "admin/berita/edit_berita.php";
					break;
				case 'del-izin':
					include "admin/berita/del_berita.php";
					break;
				case 'readingg':
                include "admin/berita/read_berita.php";
				break;
				
				//Berita RKU
		case 'data-brku':
			include "admin/brku/data_brku.php";
			break;
		case 'add-brku':
			include "admin/brku/add_brku.php";
			break;
		case 'edit-brku':
			include "admin/brku/edit_brku.php";
			break;
		case 'back-brku':
			include "admin/brku/kembali_brku.php";
			break;
		case 'del-brku':
			include "admin/brku/del_brku.php";
			break;
		case 'reading-rku':
		include "admin/brku/read_brku.php";
		break;

				//Koreksi
				case 'data-koreksi':
					include "admin/koreksi/data_koreksi.php";
					break;
				case 'data-tanggap':
					include "admin/koreksi/data_tanggapan.php";
					break;
				case 'add-koreksi':
					include "admin/koreksi/add_koreksi.php";
					break;
				case 'edit-koreksi':
					include "admin/koreksi/edit_koreksi.php";
					break;
				case 'del-koreksi':
					include "admin/koreksi/del_koreksi.php";
					break;

				//masuk
				case 'data-masuk':
					include "admin/masuk/data_masuk.php";
					break;
				case 'add-masuk':
					include "admin/masuk/add_masuk.php";
					break;
				case 'edit-masuk':
					include "admin/masuk/edit_masuk.php";
					break;
				case 'del-masuk':
					include "admin/masuk/del_masuk.php";
					break;

				//keluar
				case 'data-keluar':
					include "admin/keluar/data_keluar.php";
					break;
				case 'add-keluar':
					include "admin/keluar/add_keluar.php";
					break;
				case 'edit-keluar':
					include "admin/keluar/edit_keluar.php";
					break;
				case 'del-keluar':
					include "admin/keluar/del_keluar.php";
					break;
          
              //default
              default:
                  echo "<marquee><h1> MAAF LAMAN TIDAK DITEMUKAN, COBA KEMBALI NANTI !</h1></marquee>";
                  break;    
          }
      }else{
        // Auto Halaman Home Pengguna
          if($data_level=="Administrator"){
              include "home/admin.php";
              }
          elseif($data_level=="KepalaSeksi"){
              include "home/kepalasks.php";
              }
          }
    ?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->


	  <footer class="main-footer">
			<div class="pull-right hidden-xs">
			</div>
			<center>
				<strong>Copyright &copy;
					<a href="https://www.instagram.com/_unknows0/?hl=id"> Copyright &copy; 2023 
                            | Nur Fadila Safitri</a>.</strong> All rights reserved.
			</center>
		</footer>
		<div class="control-sidebar-bg"></div>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/app.min.js"></script>
	<!-- page script -->
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>
</html>