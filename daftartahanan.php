<!DOCTYPE html>
<html lang="en">
<?php
include 'koneksi.php'; 


if(isset($_POST['simpan'])){
    $id = $_POST['id'];	
	$nama = $_POST['nama'];
	$tgl = $_POST['tgl'];
	$status = $_POST['stts'];
	$asal = $_POST['asal'];
	
    // validasi
    $sql = "SELECT*FROM db_tahanan WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>pesan jika data sudah ada</strong>
            </div>
        <?php
    }else{
	//proses simpan
        $sql = "INSERT INTO db_tahanan VALUES ('$id','$nama','$tgl','$status','$asal')";
        if ($conn->query($sql) === TRUE) {
            header("Location:daftartahanan.php");
        }
    }
}
?>


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lapas NusaKemari | Data Tahanan</title>
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
					<h1>Data Tahanan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">
							<a href="home.php">Home</a>
						</li>
						<li class="breadcrumb-item active">Data Tahanan</li>
					</ol>
				</div>
			</div>
		</div>
		</section>
		<section class="content">
		<div class="container-fluid">
        <!-- Button trigger modal -->
			<p>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
			Tambah
			</button>
			<form action="print.php" method="post" target="_blank">
				<button type="submit" class="btn btn-warning" name="print">
					Print
				</button>
			</form>
			</p>

			<!-- Modal -->
			<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Tahanan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="" method="post">

					<input type="hidden" name="id">
					<div class="modal-body">
						<label for="">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>
					<div class="modal-body">
						<label for="">Tanggal masuk</label>
						<input type="text" class="form-control" id="tgl" name="tgl">
					</div>
					<div class="modal-body">
						<label for="">Masa tahanan</label>
						<input type="text" class="form-control" id="stts" name="stts">
					</div>
					<div class="modal-body">
						<label for="">Asal</label>
						<input type="text" class="form-control" id="asal" name="asal">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
					</div>
				</form>
				</div>
			</div>
			</div>
		</div>
		</section>
		<br>
		<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body table-responsive p-0">
							<table class="table table-hover text-nowrap">
							<thead>
							<tr>
								<th>Nomor</th>
								<th>Nama Tahanan</th>
								<th>Tanggal Masuk</th>
								<th>Masa Tahanan</th>
								<th>Asal</th>
								<th colspan="2"></th>
							</tr>
							</thead>
							<tbody>
								<?php

								$sql = "SELECT * FROM db_tahanan";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									$no_urut = 0;
									while ($row = $result->fetch_assoc()) {
										$no_urut++
								?>
									<tr>
										<td>
											<?php echo $no_urut; ?>
										</td>
										<td>
											<?php echo $row["nama_tahanan"]; ?>
										</td>
										<td>
											<?php echo $row["tgl"]; ?>
										</td>
										<td>
											<?php echo $row["info"]; ?>
										</td>
										<td>
											<?php echo $row["asal"]; ?>
										</td>
										<td>
										<button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $row['id'] ?>">
											Edit
										</button>
										<div class="modal fade" id="edit<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Tahanan</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form action="<?php echo baseurl("aksi.php") ?>" method="post">

													<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
													<div class="modal-body">
														<label for="">Nama</label>
														<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama_tahanan'] ?>">
													</div>
													<div class="modal-body">
														<label for="">Tanggal masuk</label>
														<input type="text" class="form-control" id="tgl" name="tgl" value="<?php echo $row['tgl'] ?>">
													</div>
													<div class="modal-body">
														<label for="">Masa Tahanan</label>
														<input type="text" class="form-control" id="stts" name="stts" value="<?php echo $row['info'] ?>">
													</div>
													<div class="modal-body">
														<label for="">Asal</label>
														<input type="text" class="form-control" id="asal" name="asal" value="<?php echo $row['asal'] ?>">
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
														<input type="submit" name="update" class=" btn btn-success" value="Update">
													</div>
												</form>
												</div>
											</div>
											</div>
										<div>
										</td>
										<td>
										<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $row['id'] ?>">
											Hapus
										</button>
										<div class="modal fade" id="hapus<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Hapus Tahanan</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form action="<?php echo baseurl("aksi.php") ?>" method="post">

													<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
													<div class="modal-body">
														<label for="">Anda yakin menghapus data ini?</label>
													</div>
													
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
														<input type="submit" name="hapus" class=" btn btn-danger" value="Hapus">
													</div>
												</form>
												</div>
											</div>
											</div>
										<div>
										</td>
									</tr>
									<?php
										}
									} else {
										echo "data kosong";
									}

									?>
							</tbody>
							</table>
						</div>
					</div>
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
<script src="dist/js/adminlte.min.js?v=3.2.0"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>