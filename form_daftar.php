<!DOCTYPE html>
<html>
<head>
<title> Formulir Pendaftaran Anggota Baru|KAMPUNG GANEPO </title>
</head>
<style type="text/css">
        h2 {
        background-color:green;
        color:white;
        }
    </style>
<body bgcolor="pink">
<h3> Formulir Pendaftaran Anggota Baru</h3>
<form action="proses_pendaftaran.php"method="POST">

	<fieldset>
	<p>
		<label for="nama">Nama: </label>
		<input type="text" name="nama" placeholder="nama lengkap"/>
	</p>
	<p>
		<label for="no_hp">No Handphone: </label>
		<textarea name="no_hp"></textarea>
	</p>
	<p>
		<label for="jenis_kelamin">Jenis Kelamin: </label>
		<label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
		<label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
	</p>
	<p>
		<label for="alamat">Alamat: </label>
		<textarea name="alamat"></textarea>
	</p>

	<p>
		<label for="keanggotaan">Keanggotaan: </label>
		<select name="keanggotaan">
			<option>Ganepo 99</option>
			<option>Yanti Ganepo</option>
			<option>Senior Ganepo</option>
			<option>Citra Minang</option>
			<option>Restu Bunda</option>
			<option>Berkah Ilahi</option>
			<option>Ganepo Yunda</option>
		</select>
	</p>
	
	<p>
		 <input type="submit" value="Daftar" name ="daftar"/>
	</p>
	
	</fieldset>
	</form>
	<a href="index.php">Kembali ke halaman awal</a>;
</body>
</html>