<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form>
		Isilah Form di Bawah Ini
		<hr>
		Nama Lengkap:<input type="text" name="txtNama"><br>
		Alamat Rumah:<input type="text" name="txtAlamatRumah" size="80"><br>
		Alamat Kantor:<input type="text" name="txtAlamatKantor" size="80"><br>
		No Telepon:<input type="text" name="txtTelepon" size="11"><br>
		Password:<input type="password" name="txtPassword" maxlength="20"><br>
		<!-- -------------------Batas -------------->

		<!-- membuat form pilihan hobby -->
		Hobby Anda (boleh lebih dari satu):<br>
		<input type="checkbox" name="hobby" value="masak">Memasak<br>
		<input type="checkbox" name="hobby" value="futsal">Futsal<br>
		<input type="checkbox" name="hobby" value="basket">Basket<br>
		<input type="checkbox" name="hobby" value="hiking">Hiking<br>
		<!-- -------------------Batas -------------->
		<!-- Membuat Form pilihan Jenis Kelamin -->
		Jenis Kelamin:<br>
		<input type="radio" name="jk" value="l">Laki-laki<br>
		<input type="radio" name="jk" value="p">Perempuan<br>
		<hr>
		<input type="Submit" value="kirim">
		<input type="Reset" value="reset">
	</form>
</body>
</html>