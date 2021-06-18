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
    $tglCheckout = $_POST['tglCheckout'];
    $tsql = "INSERT INTO Reservasi values('$idRsvp', '$idKmr', '$idPel', '$tglCheckin', '$tglCheckout')";
    $tsql2 = "UPDATE Kamar SET isAvailable=0 WHERE idKmr='$idKmr'";
    $stmt = sqlsrv_query( $conn, $tsql);
    $stmt2 = sqlsrv_query( $conn, $tsql2);
    if($stmt === false && $stmt2 === false) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }else{
        echo "Berhasil Update\n";
        echo "idRsvp: $idRsvp\n";
        echo "idKmr: $idKmr\n";
        echo "idPel: $idPel\n";
        echo "tglCheckin: $tglCheckin - tglCheckout: $tglCheckout";
        echo "query1: $stmt and query2: $stmt2";
    }

header('location:../data_reservasi.php');
// sqlsrv_free_stmt( $stmt);
// sqlsrv_close( $conn);
?>