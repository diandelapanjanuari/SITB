<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/metisMenu.css" rel="stylesheet">
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/template.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">
    

</head>
<body>
<img class="GAMBAR" src="gambar/logo.jpeg" style="width :100px; height :100px; float: left">
	<div id="input">
		<center><h1>SISTEM INFORMASI <br> TOKO BANGUNAN</h1></center>
	</div>
	
	<div class="well">
		<div id="profile">
		<img height="25 px" src="gambar/profile.png">
		<a href="profile.html">Profile</a>
		</div>
		<div id="admin">
			<h1>Halaman Admin</h1>
		</div>
		
	</div>
	<div id="menu-kiri">
		<br><br>
		<a href="beranda.html"><input type="button" name="beranda" value="Beranda"></a><br><br>
		<a href="admin.html"><input type="button" name="data-ucer" value="Olah Data Ucer"></a><br><br>
		<a href="admin2.html"><input type="button" name="data-barang" value="Data Barang"></a><br><br>
		<a href="admin3.html"><input type="button" name="data-laporan" value="Data Laporan"></a><br><br>

	</div>
	<div id="tengah">
		<h2>Selamat datang di halaman admin</h2>
		<div class="pengguna">
			<a href="profile.html">Profile pengguna</a>			
		</div>
	</div>
	<div id="kiri">
		<h2>Olah Data Ucer</h2>
		<table class="tabel-ucer" border="1">
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>pilih</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Kasir</td>
				<td></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Logistik Gudang</td>
				<td></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Suplier</td>
				<td></td>
			</tr>
			<tr>
				<td>4</td>
				<td>Manager</td>
				<td></td>
			</tr>
		</table>
	</div>
	<div class="simpan">
	<br> <br> <br>
	<input type="submit" name="input" value="Save & Cetak"><br><br>
	<a href="loginke.html"><button type="submit" >Keluar</button></a>
	</div>
</body>
</html>