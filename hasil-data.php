<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head> 
<title>KTP</title>
</head>
<body style="background-color:#BC8F8F;">
<center> <h1>DAFTAR DATA PEMBUAT KARTU TANDA PENDUDUK</h1></center> 
<center><table border="1">
<tr>
<th>Nama</th>
<th>TTL</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>Rt/Rw</th>
<th>Desa/Kelurahan</th>
<th>Kecamatan</th>
<th>Agama</th>
<th>Status</th>
<th>Pekerjaan</th>
</tr>


<?php
$query ="select * from tbl_data";
$hasil = mysqli_query($con, $query);

while($data = mysqli_fetch_array($hasil))
{        
echo "<tr>";
echo "<td>$data[nama]</td>";
echo "<td>$data[ttl]</td>";
echo "<td>$data[jenis_kelamin]</td>";
echo "<td>$data[alamat]</td>";
echo "<td>$data[rt_rw]</td>";
echo "<td>$data[desa]</td>";
echo "<td>$data[kecamatan]</td>";
echo "<td>$data[agama]</td>";
echo "<td>$data[status]</td>";
echo "<td>$data[pekerjaan]</td>";
echo "</tr>";
                }
?>
</table>
<br>
<br>
<br>
<marquee><h2> TERIMAKASIH SUDAH MENGISI</h2> </marquee>
</center>
</body>
</html>