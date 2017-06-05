<html>
<head><title>Hasil Output</title>
<style type="text/css">
body {
 background:#cccccc;
 }  
#header {
  color:white;
  padding:1px;
  margin-bottom:30px; margin-right:0px;margin-left:0px;
  background:-webkit-gradient(linear, right top, left center, color-stop(0, #cccccc),color-stop(0.5, red),color-stop(1, #cccccc));
  }
</style>
<body>
<center>
<div id="header"><h1>DATA PELANGGAN BARU</h1></div>
<table>
<tr>
<td>Nama Lengkap</td>
<td><?php echo": ", $_POST["nama"]; ?></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td><?php echo": ", $_POST["JK"]; ?></td>
</tr>
<tr>
<td>Email</td>
<td><?php echo": ", $_POST["email"]; ?></td>
</tr>
<td>Nama Negara</td>
<td><?php echo": ", $_POST["negara"]; ?></td>
</tr>
<tr>
<td>Kota</td>
<td><?php echo": ", $_POST["kota"]; ?></td>
</tr>
<tr>
<td>Alamat</td>
<td><?php echo": ", $_POST["alamat"]; ?></td>
</tr>
<tr>
<td>Kode Post</td>
<td><?php echo": ", $_POST["kode"]; ?></td>
</tr>
<tr>
<td>No. Telpon</td>
<td><?php echo": ", $_POST["telpon"]; ?></td>
</tr>
<tr>
<td>No. Handphone</td>
<td><?php echo": ", $_POST["hp"]; ?></td>
</tr>
<tr>
<td>No. Faks</td>
<td><?php echo": ", $_POST["faks"]; ?></td>
</tr>
</body>
</html>