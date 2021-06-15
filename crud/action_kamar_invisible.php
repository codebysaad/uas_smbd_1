<?php
    include "../config/connection.php";
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
        echo "Koneksi Gagal</br>";
        die( print_r( sqlsrv_errors(), true));
    }
    $idKmr = $_GET['idKmr'];
    $tsql = "UPDATE Kamar SET isAvailable=0 WHERE idKmr='$idKmr'";
    $stmt = sqlsrv_query( $conn, $tsql);
    if( $stmt === false ) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }else{
        $message="Ditandai Sebagai Tersedia";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    header('location:../data_kamar.php');
    sqlsrv_free_stmt( $stmt);
    sqlsrv_close( $conn);
?>