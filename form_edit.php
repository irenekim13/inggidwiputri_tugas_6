<?php
include("config.php");

	//kalau tidak ada id di query string
	if (!isset($_GET['id'])){
		header('Location : anggota.php');
	}
	//ambil id dari query string
	$id = $_GET['id'];
	
	//buat query untuk ambil data dari
	$sql = "SELECT*FROM data_anggota WHERE id=$id";
	$query = mysqli_query($db,$sql);
	$anggota = mysqli_fetch_assoc($query);
	
	//jika data yang di-edit tidak ditemukan
	if (mysqli_num_rows($query)< 1) {
		die("Data tidak ditemukan...");
	}
	?>

<!DOCTYPE html>
<html>
<head>
<title> Formulir Edit Anggota Baru|KAMPUNG GANEPO </title>
</head>

<body bgcolor="pink">
<h3> Formulir Edit Anggota Baru</h3>
<form action="proses_edit.php"method="POST">

	<fieldset>
		<input type="hidden" name="id" value ="<?php echo $anggota['id'] ?>" />
	<p>
		<label for="nama">Nama: </label>
		<input type="text" name="nama" placeholder="nama lengkap" value ="<?php echo $anggota['nama'] ?>"/>
	</p>
	<p>
		<label for="no_hp">No Handphone: </label>
		<textarea name="no_hp"><?php echo $anggota['no_hp'] ?></textarea>
	</p>
	
	
		<p>
		<label for="jenis_kelamin">Jenis Kelamin: </label>
		<?php $jenis_kelamin = $anggota['jenis_kelamin']?>
		<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jenis_kelamin == 'laki-laki') ?  "checked": "" ?>>Laki-laki</label>
		<label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jenis_kelamin == 'perempuan') ?  "checked": "" ?>>Perempuan</label>
	</p>
	<p>
		<label for="alamat">Alamat: </label>
		<textarea name="alamat"><?php echo $anggota['alamat'] ?></textarea>
	</p>
	

	<p>
		<label for="keanggotaan">Keanggotaan: </label>
		<?php $keanggotaan = $anggota['keanggotaan'];?>
		<select name="keanggotaan">
			<option> <?php echo ($keanggotaan =='Ganepo 99') ? : ""?>Ganepo 99</option>
			<option> <?php echo ($keanggotaan =='Yanti Ganepo') ? "": ""?>Yanti Ganepo</option>
			<option> <?php echo ($keanggotaan =='Senior Ganepo') ? "": ""?>Senior Ganepo</option>
			<option> <?php echo ($keanggotaan =='Citra Minang') ? "": ""?>Citra Minang</option>
			<option> <?php echo ($keanggotaan =='Restu Bunda') ? "": ""?>Restu Bunda</option>
			<option> <?php echo ($keanggotaan =='Berkah Ilahi') ? "": ""?>Berkah Ilahi</option>
			<option> <?php echo ($keanggotaan =='Ganepo Yunda') ? "": ""?>Ganepo Yunda</option>
		</select>
	</p>
	<p>
		 <input type="submit" value="Simpan" name ="simpan"/>
	</p>
	
	</fieldset>
	</form>
</body>
</html>