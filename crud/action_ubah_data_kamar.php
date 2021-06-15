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
    $tsql = "UPDATE Kamar SET nomorKmr=$nomorKmr, jenisKmr='$jenisKmr', lantai=$lantai, harga=$harga, fasilitas='$fasilitas' WHERE idKmr='$idKmr'";
    $stmt = sqlsrv_query( $conn, $tsql);
    if( $stmt === false ) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }

header('location:../data_kamar.php');
// sqlsrv_free_stmt( $stmt);
// sqlsrv_close( $conn);
?>