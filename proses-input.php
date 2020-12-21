<?php

    include "koneksi.php";

    $nama = $_POST['nama'];
    $tempat_tanggal_lahir = $_POST['ttl'];
    $jenis_kelamin = $_POST['j_kelamin'];
    $alamat = $_POST['alamat'];
    $rt_rw = $_POST['rt_rw'];
    $kelurahan = $_POST['desa_kel'];
    $kecamatan = $_POST['kecamatan'];
    $agama = $_POST['agama'];
    $status_perkawinan = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];

    $sql = "INSERT INTO tbl_data SET nama='$nama',ttl='$tempat_tanggal_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat',rt_rw='$rt_rw',desa='$kelurahan', kecamatan='$kecamatan', agama='$agama', status='$status_perkawinan', pekerjaan='$pekerjaan'";
    
    $hasil = mysqli_query($con,$sql);

    if($hasil) {
        echo "<script>alert('Input data berhasil!');window.location='hasil-data.php'</script>";
        exit;
    } else {
        echo "Gagal input data";
        exit;
    }

?>