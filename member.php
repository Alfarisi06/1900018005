<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.kotak{
			font-family: century gothic;
			border: 1px solid black;
			border-radius: 20px;
			padding: 20px;
			background-color: #ffffff;
			box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
			height: 30%;
			width: 500px;
		}
		footer{
			background-color:#fff;
			border-top:3px solid #d1130d;
			height:50px;
			text-align:center
		}
	</style>
</head>
<body>
	<center>
	<div class="kotak">
		<table border="0">	
			<?php
			echo "<head><title>LIST MEMBER</title></head>";
			$fp = fopen("member.txt","r");
			echo "<table border=0>";

			while($isi = fgets($fp,100))
			{
				$pisah = explode("|",$isi);
				echo "<tr><td>Nama </td><td>:$pisah[0]</td></tr>";
				echo "<tr><td>Username </td><td>:$pisah[1]</td></tr>";
				echo "<tr><td>Password </td><td>:$pisah[2]</td></tr>";
				echo "<tr><td>Email </td><td>:$pisah[3]</td></tr>";
				echo "<tr><td>Jenis Kelamin </td><td>:$pisah[4]</td></tr>";
				echo "<tr><td>Billing </td><td>:$pisah[5]</td></tr>

				<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
			}

			echo "</table>";
			echo "<a href=form.html> Klik Disini </a> Isi Form Pendaftaran MEMBER";
		?>	
		</table>
	</div>
</center>
 <footer>
        <p>Copyright @MuhammadAlfarisi</p>
    </footer>
</body>
</html>
