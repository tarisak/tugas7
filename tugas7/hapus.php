<?php
// Memanggil Koneksi pada file koneksidb.php
include 'koneksi.php';
?>
<html>
<head>
    <title> DATA PEGAWAI</title>
</head>
<body>
        <h3> DATA PEGAWAI </h3>
            <table width='80%' border=1>
            <tr>
                <th> ID Pegawai </th>
                <th> Nama </th>
                <th> Jenis Kelamin </th>
                <th> Alamat </th>
                <th> Email </th>
                <th> No.HP </th>
                <th> Edit </th>
            </tr>
        <?php
            $pegawai = mysqli_query($con, "SELECT * FROM pegawai");
            foreach ($pegawai as $row) {
                echo "<tr>";
                echo "<td align = 'center'>".$row['ID_PG']."</td>";
                echo "<td align = 'center'>".$row['NAMA']."</td>";
                echo "<td align = 'center'>".$row['JK']."</td>";
                echo "<td align = 'center'>".$row['ALAMAT']."</td>";
                echo "<td align = 'center'>".$row['EMAIL']."</td>";
                echo "<td align = 'center'>".$row['NO_HP']."</td>";
                echo "<td align = 'center'><a href='hapusData.php?id=".$row['ID_PG']."'>Hapus</a></td>"; 
                echo "</tr>";
            }
            ?>
    </table>
    <br>
    <a href="index.php"><button class="button" type="">Kembali</button></a>
</body>
</html>