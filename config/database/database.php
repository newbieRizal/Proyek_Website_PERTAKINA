<?php

    $hostname = "localhost";
    $db_id = "root";
    $db_pw  = "";
    $db_name    ="lms_pertakina";

    $connect = mysqli_connect($hostname, $db_id, $db_pw, $db_name);

    if ($connect->connect_error) {
        die("Koneksi gagal: " . $connect->connect_error);
    } else {
        echo "Koneksi berhasil";
    }

?>