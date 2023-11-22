<!DOCTYPE html>
<html lang="en">
<?php
include 'koneksi.php'; ?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lapas NusaKemari | Data Kriminal</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
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
<body class="hold-transition sidebar-mini">
<div class="wrapper">
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>
	</nav>
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="index3.html" class="brand-link">
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
				<a href="home.php" class="nav-link">
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
		<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Angka Kriminal</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">
							<a href="home.php">Home</a>
						</li>
						<li class="breadcrumb-item active">Data Angka Kriminal</li>
					</ol>
				</div>
			</div>
		</div>
		</section>
		<section class="content">
		<div class="container-fluid">
            <div class="row">
            <div class="col-md-6">
            <!-- BAR CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Data Angka Kriminal Tahun 2023</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            </div>
		</div>
		</section>
	</div>
	<footer class="main-footer">
	<div class="float-right d-none d-sm-block">
		<b>Version</b> 1.0
	</div>
	<strong>Copyright &copy; 2023 <a href="#">LapasNusaKemari</a>.</strong> All rights reserved. </footer>
	<aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/adminlte.min.js?v=3.2.0"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Tingkat Rendah',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Tingkat Tinggi',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

  })
</script>
</body>
</html>