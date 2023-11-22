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
    <div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Profil</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item">
								<a href="#">Home</a>
							</li>
							<li class="breadcrumb-item active">Profil</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/user.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">ART</h3>

                <p class="text-muted text-center">Kepala Sipir</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Tahanan Masuk 2023</b> <a class="float-right">15</a>
                  </li>
                  <li class="list-group-item">
                    <b>Tahanan Keluar 2023</b> <a class="float-right">5</a>
                  </li>
                  <li class="list-group-item">
                    <b>Semua Tahanan</b> <a class="float-right">36</a>
                  </li>
                </ul>

                <a href="daftartahanan.php" class="btn btn-primary btn-block"><b>Tambah</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Biodata</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>

                <p class="text-muted">
                  S.Kom. from UPGRIS
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Lokasi</strong>

                <p class="text-muted">Semarang, Jawa Tengah</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skill</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Mobile App</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Motivasi</strong>

                <p class="text-muted">"Tetap berusaha dan melakukan yang terbaik meskipun kita belum tau hasilnya akan - atau +" - ART</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Aktifitas</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Setting</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="dist/img/a.png" alt="user image">
                        <span class="username">
                          <a href="#">Angga Agustino Maulana</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">NPM 21670051</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Anggota kelompok ART
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="dist/img/r.png" alt="User Image">
                        <span class="username">
                          <a href="#">Rico Apriliansyah</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">NPM 21670072</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Anggota kelompok ART
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="dist/img/t.png" alt="User Image">
                        <span class="username">
                          <a href="#">Tegar Robi Bakhtiar</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">NPM 21670068</span>
                      </div>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Nama">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Alamat">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Pengalaman</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Pengalaman"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skill</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skill">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Saya menyetujui <a href="#">semua persyaratan</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
</body>
</html>