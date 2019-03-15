<?php
include("config.php");
//cek apakah tombol simpan sudah diklikatau belum?
if (isset($_POST['simpan'])){
	
		//ambil data dari formulir
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$no_handphone = $_POST['no_hp'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$keanggotaan = $_POST['keanggotaan'];
		
		//buat query update
		$sql = "UPDATE data_anggota SET nama='$nama', no_hp='$no_handphone', jenis_kelamin='$jenis_kelamin', alamat='$alamat',  keanggotaan='$keanggotaan' WHERE id=$id";
		$query = mysqli_query($db,$sql);
		
		//apakah query update berhasil?
		if ($query){ 
			//kalau berhasil alihkan ke halaman anggota.php dengan status = sukses
			header('Location: anggota.php');
		} else {
			//kalau gagal tampilkan pesan
			die("Gagal menyimpan perubahan...");
		}
		
} else {
	die("Akses dilarang...");
}
?>