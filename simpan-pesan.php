<?php
 
$host = "localhost";
$username = "root";
$password = "";
$db_name = "dbdendi";

$konek = new mysqli($host, $username, $password , $db_name);

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

//$idpelanggan = $_POST['idpelanggan'];  
$namapelanggan = $_POST['namapelanggan'];
$alamat = $_POST['alamat'];
$tanggalpesan = $_POST['tanggalpesan'];
$order1 = $_POST['order1'];
$order2 = $_POST['order2'];
$order3 = $_POST['order3'];
$order4 = $_POST['order4'];
$order5 = $_POST['order5'];
$order6 = $_POST['order6'];
$order7 = $_POST['order7'];
$order8 = $_POST['order8'];
$order9 = $_POST['order9'];
$order10 = $_POST['order10'];
$order11 = $_POST['order11'];
$order12 = $_POST['order12'];
$totalharga = $_POST['totalharga'];
$totalbarang = $_POST['totalbarang'];
//$bayar = $_POST['bayar'];
 //echo"Bayar =  $bayar";
 
$sql = "INSERT INTO pesan(namapelanggan,alamat,tanggalpesan,order1,order2,order3,order4,order5,order6,order7,order8,order9,order10,order11,order12,totalharga,totalbarang)VALUES ('$namapelanggan','$alamat','$tanggalpesan','$order1','$order2','$order3','$order4','$order5','$order6','$order7','$order8','$order9','$order10','$order11','$order12','$totalharga','$totalbarang')";

//,'$order1','$order2','$order3','$order4','$order5','$order6','$order7','$order8','$order9','$order10','$order11','$order12'
//,101,102,103,104,201,202,203,204,301,302,303,304
if($konek->query($sql)){
  echo " <center><h1>Pemesanan telah Berhasil</h1></center>
 <a href='tampil_customer.php'>Tampil Customer </a>
  ";
}else{
  echo "Data customer GAGAL ditambah : ".$konek->error."<br/>";
}

?>