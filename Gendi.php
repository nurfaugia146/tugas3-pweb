<!DOCTYPE html>
<html>
<head>
	<title>Daftarkan diri anda </title>
	<link rel="stylesheet" type="text/css" href="raru.css">
</head>

<body>
  
	<form method="POST" action="data.php">
	<div class="gendi" align="center">
		
		<div class="form" align="center">
		<h1 align="center">DAFTAR</h1>
 

<body>

<table border="0" align="center">
<div class="ayam">
<tr>
    <td align="left">Nama Lengkap</td>
    <td>:</td>
    <td><input type="text" name="firstname" placeholder="Input First Name"></td>
</tr>
<tr align="left">
    <td>Program Studi</td>
    <td>:</td>
    <td><input type="text" name="Proram Study" placeholder="Program Studi"></td>
</tr>
<tr align="left">
    <td>Fakultas</td>
    <td>:</td>
    <td><input type="text" name="fakultas" placeholder="Fakultas"></td>
</tr>
<tr align="left">
    <td>No. Handphone</td>
    <td>:</td>
    <td><input type="text" name="firstname" placeholder="Input First Name"></td>
</tr>

<tr align="left">
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="Gender">laki-Laki
    <input type="radio" name="Gender">Perempuan</td>
</tr>

<tr align="left">
    <td>Agama</td>
    <td>:</td>
    <td><select>
      <option>Pilih Agama</option>
      <option>Islam</option>
      <option>Kristen</option>
      <option>Budha</option>
      <option>Khatolik</option>
      </select></td>
</tr >

<tr align="left">
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="Date"></td>
</tr>

<tr align="left">
    <td>Alamat</td>
    <td>:</td>
    <td><textarea cols="22" rows="3" placeholder="Input Address"></textarea></td>
</tr>

<tr align="left">
    <td>E-mail</td>
    <td>:</td>
    <td><input type="email" placeholder="Input E-mail"></td>
</tr>

<tr align="left">
    	<td>Username</td>
    	<td>:</td>
    	    <td><input type="text" name="username" placeholder="Username"></td>
</tr>

<tr align="left">
	<td>Masukkan Foto Anda</td>
</tr>

<tr align="left">
	<td>Input File</td>
</tr>

<tr align="left">
	<td><input id="exampleInputFile" type="file"></td>
</tr>
<br>
<tr align="left"><br>
    <td><input type="reset" name="reset" value="Reset">
    <input type="submit" name="submit" value="Submit"></td>
</tr>

</div>
</table>
</div>
</form>
<div class="input">
		 <?php 
		 include "data.php"	
		 ?>	
</div>

</div>
	</div>
</body>
</html>