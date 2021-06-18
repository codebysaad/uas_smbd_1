<?php
    include "../config/connection.php";
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
        echo "Koneksi Gagal</br>";
        die( print_r( sqlsrv_errors(), true));
    }
    $idRsvp = $_GET['idReservasi'];
    $tsql = "UPDATE Kamar SET isAvailable=1 WHERE idKmr = '(SELECT idKmr FROM Reservasi WHERE idReservasi = '$idRsvp')'";
    $tsql1 = "DELETE Reservasi WHERE idReservasi = '$idRsvp'";
    $stmt = sqlsrv_query( $conn, $tsql);
    $stmt1 = sqlsrv_query( $conn, $tsql1);
    if( $stmt === false && $stmt1 === false ) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }else{
        $message="Reservasi berhasil dihapus";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    header('location:../data_reservasi.php');
    // sqlsrv_free_stmt( $stmt);
    // sqlsrv_close( $conn);
?>