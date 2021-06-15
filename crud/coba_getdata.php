<?php 
include 'config/connection.php';
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
    echo "Koneksi Gagal</br>";
    die( print_r( sqlsrv_errors(), true));
}
$tsql = "SELECT COUNT(*) AS 'Total' FROM Kamar WHERE isAvailable = 1";
$stmt = sqlsrv_query( $conn, $tsql);
if( $stmt === false ) {
echo "Error in executing query.</br>";
                                die( print_r( sqlsrv_errors(), true));
                            }
                            $json = array();
                            while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                            
                            // do {
                            //     while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {                                            
                            //         $json = $row;
                            //     }
                            // } while ( sqlsrv_next_result($stmt) );
                            // json_encode($json);
                            }
				        ?>