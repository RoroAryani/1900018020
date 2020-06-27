<!DOCTYPE html>
<html>
<head>
	<title>formulir data</title>
</head>
<body>
	<form method="POST" action="proses.php">
	<h1 align="center">FORMULIR DATA</h1>
	
		<p>DATA</p>
		<select name="status">
			<option value="mhs">MAHASISWA</option>
			<option value="dosen" selected>DOSEN</option>
		</select>
		<br>

		<p>NAMA</p>
		<textarea name="nama" rows="2" cols="30"></textarea>
		<br>

		<label>NIM :</label>
		<label><input type="dropdown" name="nim" value=""></input></label>
		<br>

		<br>
		<label>KELAS :</label>
		<label><input type="checkbox" name="Kelas" value="A">A</input></label>
		<label><input type="checkbox" name="Kelas" value="B">B</input></label>
		<label><input type="checkbox" name="Kelas" value="C">C</input></label>
		<br>




		<br>
		<label>JENIS KELAMIN :</label>
		<label><input type="radio" name="jeniskelamin" value="Laki-laki">Laki-laki</input></label>
		<label><input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</input></label>
		<br>

		<br>
		<p>ALAMAT</p>
		<textarea name="alamat" rows="5" cols="50"></textarea>



		<p></p><input type="submit" value="Submit">
	</form>
</body>
</html>
