<html>
<head>
	<link href ="struk.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head>
<body>

	<div class="container">
		<h1> W.M. Mas Dendi </h1>
		<h2> Bukti Pemabayaran </h2>
		<h3> Jl. Pakel Baru Selatan, Yogyakarta</h3>
		<h3> Terima kasih Atas Kunjungannya</h3>	

<?php
$tgl_skrg = date("d-m-Y");

$host = "localhost";
$username = "root";
$password = "";
$db_name = "dbdendi";

$konek = new mysqli($host, $username, $password , $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}else {

$user = $_GET['user'];

$sql = "select * from pesan where namapelanggan = '$user' ";
$data = $konek->query($sql);
echo "<table border='0'>";

if ($data->num_rows > 0){
	while ($row = $data->fetch_assoc()) {
		echo "<tr>";
		echo "<td>TANGGAL </td>";
		echo "<td> : </td>";
		echo "<td> $tgl_skrg </td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> NAMA PEMESAN </td>";
		echo "<td> : </td>";
		echo "<td>".$row['namapelanggan']."</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> Gurameh goreng </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order1']*50000;
		echo "</td>";
		echo "<td>".$row['order1']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Gurameh bakar </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order2']*55000;
		echo "</td>";
		echo "<td>".$row['order2']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>  Udang goreng </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order3']*15000;
		echo "</td>";
		echo "<td>".$row['order3']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Lobster saus tiram </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order4']*40000;
		echo "</td>";
		echo "<td>".$row['order4']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Cumi saus tiram </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order5']*30000;
		echo "</td>";
		echo "<td>".$row['order5']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Bawal sambal kecap </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order6']*25000;
		echo "</td>";
		echo "<td>".$row['order6']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Ca kangkung </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order7']*12000;
		echo "</td>";
		echo "<td>".$row['order7']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Jus alpukat </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order8']*10000;
		echo "</td>";
		echo "<td>".$row['order8']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Oreo milkshake </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order9']*13000;
		echo "</td>";
		echo "<td>".$row['order9']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Es teh </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order10']*3000;
		echo "</td>";
		echo "<td>".$row['order10']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Es jeruk </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order11']*3500;
		echo "</td>";
		echo "<td>".$row['order11']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Jus Srawberry </td>";
		echo "<td> : </td>";
		echo "<td>".$row['order12']*10000;
		echo "</td>";
		echo "<td>".$row['order12']."</td>";
		echo "</tr>";

		echo "<td></td>";
		echo "<tr>";
		echo "<td><b> JUMLAH BARANG </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['totalbarang'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> TOTAL HARGA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['totalharga'];
		echo "</td>";
		echo "</tr>";
		echo "</table>";

	}	
}else{
	echo"Tidak dapat di cetak";
}


}
$konek->close();
?>
</div>
<h3><a href="#" onclick="window.print()"> Print </a> </h3>	
</body>
</html>