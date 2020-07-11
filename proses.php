<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.kotak2{
			border: 1px solid black;
			border-radius: 20px;
			padding: 20px;
			background-color: #ffffff;
			box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
			height: 420px;
			width: 500px;
			font-family: century gothic;
		}
		p{
			color: green;
			
		}
	</style>
</head>
<body>
	<center>
	<div class="kotak2">
		<?php
				echo "<head><title>List Member CHYPHER NET</head></title>";
				$fp = fopen("member.txt","a+");
				$nama = $_POST['nama'];
				$username =$_POST['username'];
				$password =$_POST['password'];
				$email =$_POST['email'];
				$jenis =$_POST['jenis'];
				$billing =$_POST['billing'];

				fputs($fp,"$nama|$username|$password|$email|$jenis|$billing\n");
				fclose($fp);

				echo "<p>Selamat Member Telah Terdaftar!</p><br>";
				echo "<a href=form.html> Beranda </a><br>";
				echo "<a href=member.php> Lihat List MEMBER </a><br>";
		?>	
	</div>
</center>
</body>
</html>
