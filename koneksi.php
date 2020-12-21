<?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "db_ktp";
            $con = mysqli_connect($host, $username, $password, $database);
            if(!$con){
                die("Koneksi gagal : " . mysqli_connect_error());
            }
?>