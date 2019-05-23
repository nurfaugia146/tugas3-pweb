<?php
$nama=$_POST['nama'];
$nim=$_POST['nim'];
if($nama==""){
	header("location:tugas.php?nama=kosong");	
} else{
	echo "Nama anda adalah ".$nama;

}
if($nim==""){
	header("location:tugas.php?nim=kosong");	
} else{
	echo "<br> Nim anda adalah ".$nim;
}
?>