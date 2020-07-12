<html>
<head>
<link rel="stylesheet" type="text/css" href="pweb.css"></head>
<body>
<div>
<?php 
$file="formulir.txt";
$fp =fopen($file,"a+");
	$No_KK=$_POST["kk"];
	$NIK=$_POST["nik"];
	$Nama=$_POST["nama"]; 
	$Tempat_lahir=$_POST["lahir"]; 
	$Tanggal_lahir=$_POST["tgl"]; 
	$Jenis_Kelamin=$_POST["jk"];
	$Status=$_POST["status"];
	$Alamat=$_POST["alamat"]; 
	$rt_rw=$_POST["rr"];
	$Desa_Kelurahan=$_POST["desa"];
	$Kecamatan=$_POST["kc"]; 
	$Kabupaten_Kota=$_POST["kota"]; 
	$Provinsi=$_POST["pro"]; 
	$No_Hp=$_POST["hp"]; 


fputs($fp,"$No_KK|$NIK|$Nama|$Tempat_lahir|$Tanggal_lahir|$Jenis_Kelamin|$Status|$Alamat|$rt_rw|$Desa_Kelurahan|$Kecamatan|$Kabupaten_Kota|$Provinsi|$No_Hp\n");
fclose($fp);
echo "<center><br>";
echo '<h1 class="h1">Terima Kasih telah mendaftar</h1><br>';
echo "&nbsp";
echo '<a class="tombol" href=tampilandata.php>Tabel Data</a>';
echo "</center>";

?>
</div>
</body>
</html>