<?php 
  session_start();
  include 'koneksi.php';
  // Memeriksa apakah session telah diatur
  if (isset($_SESSION['user'])) {
      // Session tersedia, lakukan sesuatu
      $nilai = $_SESSION['user'];
  } else {
      // Session tidak tersedia
      echo "Session tidak diatur.";
      echo "<script>window.location='" . baseurl("/login.php") . "';</script>";
      
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lapas NusaKemari | Dashboard</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<script nonce="8b102eb6-68c7-4f3a-9795-b5c111597e64">
    (function(w, d) {
      ! function(dK, dL, dM, dN) {
        dK[dM] = dK[dM] || {};
        dK[dM].executed = [];
        dK.zaraz = {
          deferred: [],
          listeners: []
        };
        dK.zaraz.q = [];
        dK.zaraz._f = function(dO) {
          return function() {
            var dP = Array.prototype.slice.call(arguments);
            dK.zaraz.q.push({
              m: dO,
              a: dP
            })
          }
        };
        for (const dQ of ["track", "set", "debug"]) dK.zaraz[dQ] = dK.zaraz._f(dQ);
        dK.zaraz.init = () => {
          var dR = dL.getElementsByTagName(dN)[0],
            dS = dL.createElement(dN),
            dT = dL.getElementsByTagName("title")[0];
          dT && (dK[dM].t = dL.getElementsByTagName("title")[0].text);
          dK[dM].x = Math.random();
          dK[dM].w = dK.screen.width;
          dK[dM].h = dK.screen.height;
          dK[dM].j = dK.innerHeight;
          dK[dM].e = dK.innerWidth;
          dK[dM].l = dK.location.href;
          dK[dM].r = dL.referrer;
          dK[dM].k = dK.screen.colorDepth;
          dK[dM].n = dL.characterSet;
          dK[dM].o = (new Date).getTimezoneOffset();
          if (dK.dataLayer)
            for (const dX of Object.entries(Object.entries(dataLayer).reduce(((dY, dZ) => ({
                ...dY[1],
                ...dZ[1]
              })), {}))) zaraz.set(dX[0], dX[1], {
              scope: "page"
            });
          dK[dM].q = [];
          for (; dK.zaraz.q.length;) {
            const d_ = dK.zaraz.q.shift();
            dK[dM].q.push(d_)
          }
          dS.defer = !0;
          for (const ea of [localStorage, sessionStorage]) Object.keys(ea || {}).filter((ec => ec.startsWith("_zaraz_"))).forEach((eb => {
            try {
              dK[dM]["z_" + eb.slice(7)] = JSON.parse(ea.getItem(eb))
            } catch {
              dK[dM]["z_" + eb.slice(7)] = ea.getItem(eb)
            }
          }));
          dS.referrerPolicy = "origin";
          dS.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(dK[dM])));
          dR.parentNode.insertBefore(dS, dR)
        };
        ["complete", "interactive"].includes(dL.readyState) ? zaraz.init() : dK.addEventListener("DOMContentLoaded", zaraz.init)
      }(w, d, "zarazData", "script");
    })(window, document);
  </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
	<div class="preloader flex-column justify-content-center align-items-center">
		<img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
	</div>
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>
	</nav>
	<!-- sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="home.php" class="brand-link">
	<img src="dist/img/jail.jpg" alt="Jail Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
	<span class="brand-text font-weight-light">Lapas NusaKemari</span>
	</a>
	<div class="sidebar">
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">
				<p>ART</p>
			</div>
		</div>
		<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<li class="nav-item">
				<a href="" class="nav-link">
				<i class="nav-icon fas fa-home"></i>
				<p>
					 Dashboard
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="daftartahanan.php" class="nav-link">
				<i class="nav-icon fas fa-book"></i>
				<p>
					 Data Tahanan
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="datakriminal.php" class="nav-link">
				<i class="nav-icon fas fa-chart-bar"></i>
				<p>
					 Data Angka Kriminal
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="datapengunjung.php" class="nav-link">
				<i class="nav-icon fas fa-chart-pie"></i>
				<p>
					 Data Pengunjung
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="profile.php" class="nav-link">
				<i class="nav-icon fas fa-user"></i>
				<p>
					 Profil
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link">
				<i class="nav-icon fas fa-sign-out-alt"></i>
				<p>
					 Logout
				</p>
				</a>
			</li>
		</ul>
		</nav>
	</div>
	</aside>
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Dashboard</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item">
								<a href="#">Home</a>
							</li>
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div class="small-box bg-info">
						<div class="inner">
							<h3>48</h3>
							<p>
								 Data Tahanan
							</p>
						</div>
						<div class="icon">
							<i class="ion ion-document"></i>
						</div>
						<a href="daftartahanan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-danger">
						<div class="inner">
							<h3>64<sup style="font-size: 20px">%</sup></h3>
							<p>
								 Data Angka Kriminal
							</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="datakriminal.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-success">
						<div class="inner">
							<h3>1983</h3>
							<p>
								 Data Pengunjung
							</p>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
						<a href="datapengunjung.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-warning">
						<div class="inner">
							<h3>-</h3>
							<p>
								 Profil
							</p>
						</div>
						<div class="icon">
							<i class="ion ion-person"></i>
						</div>
						<a href="profile.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		</section>
	</div>
	<footer class="main-footer">
	<strong>Copyright &copy; 2023 <a href="#">LapasNusaKemari</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 1.0
	</div>
	</footer>
	<aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>$.widget.bridge('uibutton', $.ui.button)</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js?v=3.2.0"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>