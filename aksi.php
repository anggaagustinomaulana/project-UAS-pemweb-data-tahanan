<?php
include 'koneksi.php';
 if (isset($_POST["update"])){
	$id = $_POST['id'];	
	$nama = $_POST['nama'];
	$tgl = $_POST['tgl'];
	$status = $_POST['stts'];
	$asal = $_POST['asal'];

	// Edit user's name and email
	$sql = "UPDATE db_tahanan SET nama_tahanan='$nama', tgl='$tgl', info='$status', asal='$asal' WHERE id='$id'";

	if (mysqli_query($conn, $sql)) {
		header("Location:daftartahanan.php");
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}

} else if (isset($_POST["hapus"])){	
	$id = $_POST['id'];
	$sql = "DELETE FROM db_tahanan WHERE id=$id";

	if (mysqli_query($conn, $sql)) {
		header("Location:daftartahanan.php");
		redirectto("");
	} else {
		echo "Error updating user: " . mysqli_error($conn);
	}

}
?>