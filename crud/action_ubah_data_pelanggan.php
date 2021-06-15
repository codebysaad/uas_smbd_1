<?php
    include "../config/connection.php";
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
        echo "Koneksi Gagal</br>";
        die( print_r( sqlsrv_errors(), true));
    }

    $idPel = $_POST['idPel'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $noHp = $_POST['noHp'];
    $tsql = "UPDATE Pelanggan SET nik='$nik', nama='$nama', alamat='$alamat', noHp='$noHp' WHERE idPel='$idPel'";
    $stmt = sqlsrv_query( $conn, $tsql);
    if( $stmt === false ) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }

header('location:../data_pelanggan.php');
// sqlsrv_free_stmt( $stmt);
// sqlsrv_close( $conn);
?>