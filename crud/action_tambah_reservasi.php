<?php
    include "../config/connection.php";
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
        echo "Koneksi Gagal</br>";
        die( print_r( sqlsrv_errors(), true));
    }

    $idRsvp = $_POST['idReservasi'];
    $idKmr = $_POST['idKmr'];
    $idPel = $_POST['idPel'];
    $tglCheckin = $_POST['tglCheckin'];
    $tglCheckout = $_POST['tglCheckin'];
    $queryIdKmr = "(SELECT idKmr from Kamar WHERE idKmr='$idKmr')";
    $queryIdPel = "(SELECT idPel from Pelanggan WHERE idPel='$idPel')";
    $tsql = "INSERT INTO Reservasi values('$idRsvp',$queryIdKmr,'$queryIdPel', '$tglCheckin', '$tglCheckout')";
    $tsql2 = "UPDATE Kamar SET isAvailable=0 WHERE idKmr='$idKmr'";
    $stmt = sqlsrv_query( $conn, $tsql);
    $stmt2 = sqlsrv_query( $conn, $tsql2);
    if($stmt === false && $stmt2 === false) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }

header('location:../data_reservasi.php');
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);
?>