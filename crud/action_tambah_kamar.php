<?php
    include "../config/connection.php";
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
        echo "Koneksi Gagal</br>";
        die( print_r( sqlsrv_errors(), true));
    }

    $idKmr = $_POST['idKmr'];
    $nomorKmr = $_POST['nomorKmr'];
    $jenisKmr = $_POST['jenisKmr'];
    $lantai = $_POST['lantai'];
    $harga = $_POST['harga'];
    $fasilitas = $_POST['fasilitas'];
    $tsql = "INSERT INTO Kamar values('$idKmr',$nomorKmr,'$jenisKmr', $lantai, $harga, '$fasilitas', 1)";
    $stmt = sqlsrv_query( $conn, $tsql);
    if( $stmt === false ) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }

header('location:../data_kamar.php');
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);
?>