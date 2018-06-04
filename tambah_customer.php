<html >

	<head>
	<link rel="stylesheet" href="images/HigherGround.css" type="text/css" />
	<title>W.M. Mas Dendi</title>
	</head>


	<body>
	<div id="wrap">
	<div id="top-bg"></div>
	<div id="header">
	<h1 id="logo-text">
	<a>Restoran Kuy</a></h1>
	
	<div id="header-links">
	</div>
	</div>
	<div id="header-photo"></div>
	<div id="nav">
	<ul>
	<li id="current"><a href="home.php">Daftar Menu</a></li>
	<li><a href="index.php">Order</a></li>
	<li><a href="galery.php">Galery Foto</a></li>
	<li><a href="Profil_Kami.php">Menu Baru</a></li>
	
	</ul>
	</div>
	<div id="content-wrap">
	<div id="main"> <a name="TemplateInfo"></a>
	<h2><a href="index.html" title=""></a></h2>
		<meta charset="utf-8">
		<meta charset="utf-8">
		<title>Restoran Kuy</title>
	  </head>
	  <body>
		<a href="home.php">Kembali Ke Menu</a>
		<h1>TAMBAH DATA PELANGGAN</h1>
		
		
	<form name="myForm" method="post" action="simpan-pesan.php">
		
		<table border="0">
		<tr>
		<td> Nama Pelanggan </td>
			<td> : </td>
			<td> <input type="text" name="namapelanggan" placeholder="Nama Pelanggan" ><br></td>
		</tr>
		<tr>
			<td> Alamat </td>
			<td> : </td>
			<td> <input type="text" name="alamat" placeholder="Alamat" ></td>
		</tr>
		<tr>
			<td> Tanggal Pesan</td>
			<td> : </td>
			<td> <input type="date" name="tanggalpesan"  ></td>
		</tr>
	
		</table>
	<table border="2" cellspacing=0 cellpadding=5 >
			<colgroup align="center">
			<colgroup align="center">
			<colgroup align="center">
			<thead valign="middle">
			<tr>
			<th width="35"><font color="black" size="2">No</font>
			<th width="200"><font color="black" size="2">Makanan/Minuman</font>
			<th width="180"><font color="black" size="2">Harga Satuan</font>
			<th width="100"><font color="black" size="2">Pesan</font>
			</tr>
			<tbody>
			<tr>
			<td>1<td>Ayam Goreng Madu<td><input type="text" value="50000" disabled="true"/><td>
			<input  type="text"  name="order1"  placeholder="" onChange="jumlah()" onKeyPress="return goodchars(event,'0123456789',this)" title="Isi Dengan Angka" required />
			</tr>
			<tr>
			<td>2<td>Ayam Bakar Madu<td><input type="text" value="55000" disabled="true"/><td>
			<input  type="text"  name="order2" value="" onChange="jumlah()" />
			</tr>
			<tr>
			<td>3<td>Ayam Kampung Madu<td><input  type="text"   value="15000" disabled="true"/> <td>
			<input  type="text"  name="order3" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>4<td>Ayam Kampung Goreng<td><input  type="text"   value="40000" disabled="true"/>
			<td><input  type="text"  name="order4" value="" onChange="jumlah()" />
			</tr>
			<tr>
			<td>5<td>Ikan Nila Goreng<td><input  type="text"   value="30000" disabled="true"/> <td>
			<input  type="text"  name="order5" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>6<td>Ikan Nila Goreng Spesial<td><input  type="text"   value="25000" disabled="true"/> <td>
			<input  type="text"  name="order6" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>7<td>Tongseng Jamur<td><input  type="text"   value="12000" disabled="true"/> <td>
			<input  type="text"  name="order7" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>8<td>Jus Mangga<td><input  type="text"   value="10000" disabled="true"/> <td>
			<input  type="text"  name="order8" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>9<td>Jus Alpukat<td><input  type="text"   value="13000" disabled="true"/> <td>
			<input  type="text"  name="order9" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>10<td>Es teh<td><input  type="text"   value="3000" disabled="true"/> <td>
			<input  type="text"  name="order10" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>11<td>Es jeruk<td><input  type="text"   value="3500" disabled="true"/> <td>
			<input  type="text"  name="order11" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td>12<td>Thai Tea<td><input  type="text"   value="10000" disabled="true"/> <td>
			<input  type="text"  name="order12" value="" onChange="jumlah()"/>
			</tr>
			<tr>
			<td colspan=3 align="right">Total Harga<td><input type="text"  id="total" name="totalharga" value="" />
			</tr>
			<tr>
			<td colspan=3 align="right">Jumlah Total Barang<td><input type="text"  id="totalbarang" name="totalbarang" value="" />
			</tr>
			
	</table>
<br/>
<input type="reset" value="CANCEL" onClick="resetForm()" />
<input type="submit" value="ORDER" />
</form>
	</div>
	
<script language="JavaScript" type="text/javascript">
function jumlah() {
//var myForm = document.form1;
var nasgor = 50000 * myForm.order1.value;
var mireb = 55000 * myForm.order2.value;
var spag = 15000 * myForm.order3.value;
var abak = 40000 * myForm.order4.value;
var agor = 30000 * myForm.order5.value;
var nibak = 25000 * myForm.order6.value;
var nigor = 12000 * myForm.order7.value;
var amin = 10000 * myForm.order8.value;
var ejer =  13000 * myForm.order9.value;
var eteh = 3000 * myForm.order10.value;
var thang = 3500 * myForm.order11.value;
var koptam = 10000 * myForm.order12.value;
var hasil = nasgor+mireb+spag+abak+agor+nibak+nigor+amin+ejer+eteh+thang+koptam;
var jumlah = (nasgor/50000)+(mireb/55000)+(spag/15000 )+(abak/40000)+(agor/30000)+(nibak/25000)+(nigor/12000)+(amin/10000)+(ejer/13000)+(eteh/3000)+(thang/3500)+(koptam/10000);

	//var coba = bakso;
	//document.myForm.total.value = hasil;
	//eval(myForm.total.value = bakso);
	myForm.totalbarang.value = jumlah;
if (hasil > 50000) {
    myForm.total.value = hasil;
    myForm.diskon.value = 10000;
    myForm.bayar.value = hasil - eval(myForm.diskon.value);
 } else {
    myForm.total.value = hasil;
    myForm.diskon.value = 0;
    document.myForm.bayar.value = hasil - eval(myForm.diskon.value);
 }
}
function resetForm(){
document.form1.reset();
}
</script>
 
	</body>
</html>