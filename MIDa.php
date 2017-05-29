<html>
<head><title>Aplikasi Pendaftaran Pelanggan Baru</title>
<style type="text/css">
body {
 background:#cccccc;
 }  
#header {
  color:white;
  padding:1px;
  margin-bottom:30px; margin-right:0px;margin-left:0px;
  background:-webkit-gradient(linear, right top, left center, color-stop(0, #cccccc),color-stop(0.5, green),color-stop(1, #cccccc));
  }
</style>
<body>
<center>
<div id="header"><h1>PENDAFTARAN PELANGGAN BARU</h1></div>
<tr>
<td colspan="2"
id="Data Pribadi"><h2>Data Pribadi</h2></td>
</tr>
<form action="MIDb.php" method="post">
<pre>
Nama Lengkap	        : <input type="text" name="nama" />
Jenis Kelamin	        : <input type="text" name="JK" />
Email			: <input type="text" name="email" />
<tr>
<td colspan="2"
id="Data Alamat Pengiriman"><h2>Data Alamat Pengiriman</h2></td>
</tr>
Nama Negara		: <input type="text" name="negara" />
Kota			: <input type="text" name="kota" />
Alamat			: <input type="text" name="alamat" />
Kode Pos		: <input type="text" name="kode" />
<tr>
<td colspan="2"
id="Data No Kontak"><h2>Data No Kontak</h2></td>
</tr>
No Telepon		: <input type="text" name="telpon" />
No Handphone	        : <input type="text" name="hp" />
No Faks	                : <input type="text" name="faks" />
				  <input type="submit"/ name=send value="Send"/>
				  <input type="reset" value="reset"/>
				
</pre>
</form>
</body>
</html>