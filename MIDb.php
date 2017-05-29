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
<tr>
Nama Lengkap    :  <?php echo $_POST["nama"]; ?><br/>
Jenis Kelamin   :    <?php echo $_POST["JK"]; ?><br/>
Email           :         <?php echo $_POST["email"]; ?><br/>
Nama Negara     :   <?php echo $_POST["negara"]; ?><br/>
Kota :          <?php echo $_POST["kota"]; ?><br/>
Alamat :        <?php echo $_POST["alamat"]; ?><br/>
Kode Post :     <?php echo $_POST["kode"]; ?><br/>
No. Telpon:     <?php echo $_POST["telpon"]; ?><br/>
No. Handphone : <?php echo $_POST["hp"]; ?><br/>
No. Faks :      <?php echo $_POST["faks"]; ?><br/>
</body>
</html>