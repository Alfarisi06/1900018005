<?php 
	
	$Nama=$Alamat=$Telp=$JK=$Agama=$Prestasi=$Nama_err=$Alamat_err=$Telp_err=$JK_err=$Agama_err=$Prestasi_err="";
	
	
	
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		if (empty(trim($_POST['Nama']))) {
			echo $Nama_err="Masukkan Nama Anda!<br>";
			
		}
		else {
			echo "Nama :".$Nama=$_POST['Nama']."<br>";
		}
		if (empty(trim($_POST['Alamat']))) {
			echo $Alamat_err="Masukkan Alamat Anda!<br>";
		}
		else{
			echo "Alamat :".$Alamat=$_POST['Alamat']."<br>";
		}
		if (empty(trim($_POST['Telp']))) {
			echo $Telp_err="Masukkan No Telp!<br>";
		}
		else{
			echo "Telp :".$Telp=$_POST['Telp']."<br>";
		}
		if(empty(trim($_POST['JK']))){
			echo $JK_err="Masukkan Jenis Kelamin Anda!"."<br>";
		}
		else{
			echo "Jenis Kelamin :".$JK=$_POST['JK']."<br>";
		}
		if (empty(trim($_POST['Agama']))) {
			 echo $Agama_err="Masukkan Agama Anda!"."<br>";
		}
		else{
			echo "Agama :".$Agama=$_POST['Agama']."<br>";
		}
		if (empty(trim($_POST['Prestasi']))) {
			 echo $Prestasi_err="Masukkan Prestasi!"."<br>";
		}
		else{
			echo "Prestasi :".$Prestasi=$_POST['Prestasi']."<br>";
		}
	}
?> 