<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="pweb.css"></head>
	<title>formulir data</title>
<body>
	<center>
	<form method="POST" action="proses.php">
		
	<h1 align="center">FORMULIR PENDAFTARAN KARTU KESEHATAN</h1>
	<h1 align="center">------------------------------------------------------------------------------------------------------------------------------</h1>
	<td>
			<pre>
	<label>No.KK 			:</label><input type="dropdown" name="kk" value=""></input>
			</pre>

		    <pre>
	<label>NIK 			:</label><input type="dropdown" name="nik" value=""></input>
		    </pre>

		    <pre>
	<label>Nama Lengkap 		:</label><input type="dropdown" name="nama" value=""></input>
			</pre>

			<pre>
	<label>Tempat lahir		:</label><input type="dropdown" name="lahir" value=""></input>
			</pre>

			<pre>
      <label>Tanggal lahir      	:</label><input type="date" name="tgl" size="5" value=""></input>
			</pre>
							
			<pre>
	<label>Jenis Kelamin   	:<input type="radio" name="jk" value="Laki-laki">Laki-laki</input></label><label><input type="radio" name="jk" value="Perempuan">Perempuan</input></label>
			</pre>

			<pre>
<label>Status 			:</label><td><select type=text name="status" id="status">
					<option>Menikah</option>
					<option>Belum Menikah</option>
					<option>Sigle parent</option>
				</select>
				</td>
			</pre>
			<pre>
	<label>Alamat 			:<input type="dropdown" name="alamat" value=""></input></label>
				 <label>rt/rw 	  	:<input type="dropdown" name="rr" value=""></input></label>
				 <label>Desa/Kelurahan :<input type="dropdown" name="desa" value=""></input></label>
				 <label>Kecamatan    	:<input type="dropdown" name="kc" value=""></input></label>
				 <label>Kabupaten/Kota :<input type="dropdown" name="kota" value=""></input></label>
				 <label>Provinsi 	:<input type="dropdown" name="pro" value=""></input></label>
			</pre>

			<pre>
    <label>No.HP 		     :</label><input type="dropdown" name="hp" value=""></input>
			</pre>
		<p></p><input type="submit" value="Submit">
		
	</form>
	</center>
</body>
</html>