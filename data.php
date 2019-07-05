<?php 	

	$var=fopen("simpan.txt","w");//Fungsi fopen() digunakan untuk membuka file.
	//(w) Write only(hanya menulis). Membuka dan menghapus isi dari file atau membuat file baru bila file tersebut belum ada.
	fwrite($var,"Data");
	fwrite(	$var, "Berhasil Disimpan");//untuk menandakan data yang sudah berhasil disimpan di "simpan.txt"
	fclose($var);//untuk menutup file
	$var2=fopen("simpan.txt" , "r"); //Read only(hanya membaca). Dimulai dari awal sebuah file
	echo fread($var2,filesize('simpan.txt'));
	fclose($var2);//untuk menutup file


 ?>