<?php

include("config.php");

//cek apakah tombol daftar sudah diklik atau belum?
if (isset($_POST['daftar'])){
	
		//ambil data dari formulir
		$nama = $_POST['nama'];
		$no_handphone = $_POST['no_hp'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$keanggotaan = $_POST['keanggotaan'];
		
		//buat query
		$sql = "INSERT INTO data_anggota(nama,no_hp,jenis_kelamin,alamat,keanggotaan) VALUE ('$nama','$no_handphone','$jenis_kelamin','$alamat','$keanggotaan')";
		$query = mysqli_query($db,$sql);
		
		//apakah query simpan berhasil?
		if ($query){
			//kalau berhasil alihkan ke halaman index.php dengan status = sukses
			header('Location: anggota.php?status=sukses');
		} else {
			//kalau gagal alihkan ke halaman indek.php dengan status = gagal
			header('Location: index.php?status=gagal');
		}
		
} else {
	die("Akses dilarang...");
}
?>