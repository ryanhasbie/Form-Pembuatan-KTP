<!DOCTYPE html>
<html>
<head>
<body  style="background-color:#BC8F8F;">
<h1 style="text-align:center;">FORM PEBUATAN KARTU TANDA PENDUUDUK (KTP)</h1>
<br>
<hr style="color: white">
<a href="https://ubpkarawang.ac.id/index.php/id/">UBP Karawang </a> | <a href="http://ftik.ubpkarawang.ac.id/">FTIK</a> | <a href="http://informatika.ubpkarawang.ac.id/">Informatika</a>
<hr style="color: white">
</body>
<body>
<pre>
<form method = "post" action ="proses-input.php">

Nama          :<input type="text" name="nama" id="nama"> </br>
TTL           :<input type="text" name="ttl" id="ttl"> <br>
Jenis Kelamin :<select name="j_kelamin" id="jkelamin"> <option value="-">-</option> <option value="Laki-laki">Laki-Laki</option> <option value="Perempuan">Perempuan</option> </select> <br>
Alamat        :<input type="text" name="alamat" id="alamat"> <br>
Rt/Rw         :<input type="text" name="rt_rw" id="rtrw"> <br>
Desa/Kelurahan:<input type="text" name="desa_kel" id="desakel"> <br>
Kecamatan     :<input type="text" name="kecamatan" id="kec"> <br>
Agama         :<select name="agama" id="agama">
<option value="-">-</option>
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Budha">Katolik</option>
<option value="Hindu">Hindu</option>
<option value="Budha">Budha</option> 
<option value="Konghucu">Konghucu</option></select> <br>
Status        :<input type="radio" name="status" value="Kawin" class="radio_b">Kawin 
               <input type="radio" name="status" value="Belum kawin" class="radio_b">Belum Kawin <br>
Pekerjaan     :<input type="text" name="pekerjaan" id="pekerjaan"> <br>
<a href=""><button type="submit" name="submit">Submit</button></a>
</pre>
<br>
<marquee><h2> SELAMAT DATANG</h2> </marquee
<br>

<p style="text-align:center;">&#169; Pemrograman Web 2020</p>
<br>
</form>
</body>
</head>
</html>