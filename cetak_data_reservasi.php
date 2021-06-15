<!DOCTYPE html>
<html>
<head>
    <title>Panduancode Cetak laporan PDF Di PHP Dan MySQLi</title>
</head>
<body>
    <style type="text/css">
        body{
            font-family: sans-serif;
        }
        table{
            margin: 20px auto;
            border-collapse: collapse;
        }
        table th,
        table td{
            border: 1px solid #3c3c3c;
            padding: 3px 8px;
        }
        a{
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
        .tengah{
            text-align: center;
        }
    </style>
    <table>
        <tr>
            <th>No.</th>
            <th>ID Reservasi</th>
            <th>Tanggal Checkin</th>
            <th>Tanggal Checkout</th>
            <th>ID Kamar</th>
            <th>Nomor Kamar</th>
            <th>Jenis Kamar</th>
            <th>Harga</th>
            <th>ID Pelanggan</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
        </tr>
        <?php 
        // koneksi database
            include 'config/connection.php';
		    $conn = sqlsrv_connect( $serverName, $connectionInfo);
            if( $conn === false ) {
                echo "Koneksi Gagal</br>";
                die( print_r( sqlsrv_errors(), true));
            }
            $tsql = "SELECT idReservasi, tglCheckin, tglCheckout, Kamar.idKmr, nomorKmr, jenisKmr, harga, Pelanggan.idPel, nama, alamat FROM Reservasi, Kamar, Pelanggan WHERE Reservasi.idKmr=Kamar.idKmr AND Reservasi.idPel=Pelanggan.idPel";
            $stmt = sqlsrv_query( $conn, $tsql);
            if( $stmt === false ) {
                echo "Error in executing query.</br>";
                die( print_r( sqlsrv_errors(), true));
            }
            $json = array();
            $no=1;
            while($d = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        ?>
    <tr>
        <td style='text-align: center;'><?php echo $no++ ?></td>
        <td><?php echo $d['idReservasi']; ?></td>
        <td><?php echo date_format($d['tglCheckin'], 'd-m-Y') ?></td>
        <td><?php echo date_format($d['tglCheckout'], 'd-m-Y') ?></td>
        <td><?php echo $d['idKmr']; ?></td>
        <td><?php echo $d['nomorKmr']; ?> </td>
        <td><?php echo $d['jenisKmr']; ?></td>
        <td><?php echo $d['harga']; ?></td>
        <td><?php echo $d['idPel']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['alamat']; ?> </td>
    </tr>
    <?php 
        }
    ?>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>