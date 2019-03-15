<?php include("config.php");?>

<!DOCTYPE html>
<html>
<head>
<title> Pendaftaran Anggota baru|KAMPUNG GANEPO </title>
</head>
<body>
<h3> DATA ANGGOTA</h3>
<nav>
<a href="form_daftar.php"><font color="black">[+] Tambah Baru</font> </a>
</nav>
<?php if (isset($_GET['status'])):?>
<p>
	<?php
		if($_GET['status'] == 'sukses'){
			echo "Pendaftaran Anggota Baru Berhasil!";
		}else {
			echo "pendaftaran gagal!";
		}
	?>
</p>
<?php endif; ?>
<br>
<table border ="1">
	<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>No Handphone</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Keanggotaan</th>
		<th>Tindakan</th>
	</tr>
	</thead>
	<tbody>
	
	<?php
	$sql = "SELECT * FROM data_anggota";
	$query=mysqli_query($db,$sql);
	
	while ($anggota = mysqli_fetch_array($query)) {
		echo "<tr>";
		
		echo "<td>".$anggota['id']."</td>";
		echo "<td>".$anggota['nama']."</td>";
		echo "<td>".$anggota['no_hp']."</td>";
		echo "<td>".$anggota['jenis_kelamin']."</td>";
		echo "<td>".$anggota['alamat']."</td>";
		echo "<td>".$anggota['keanggotaan']."</td>";
		
		echo "<td>";
		echo "<a href ='form_edit.php?id=".$anggota['id']."'>Edit</a>|";
		echo "<a href ='hapus.php?id=".$anggota['id']."'>Hapus</a>|";
		echo "</td>";
		
		echo "</tr>";
		
	}
	?>
	
	</tbody>
	</table>
	
	<p> Total : <?php echo mysqli_num_rows($query)?></p>
	
	
   <a href="index.php">Kembali ke halaman awal</a>;
	
	
	
</body>
</html>