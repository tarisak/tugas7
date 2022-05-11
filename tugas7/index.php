<?php 
    include("koneksi.php");
    $pegawai = mysqli_query($con, "SELECT * FROM pegawai");
?>
<html>
    <head>
        <title> DATA PEGAWAI </title>
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
            </tr>
            <?php 
                while($data = mysqli_fetch_array($pegawai)) {
                    echo "<tr>";
                    echo "<td>".$data['ID_PG']."</td>";
                    echo "<td>".$data['NAMA']."</td>";
                    echo "<td>".$data['JK']."</td>";
                    echo "<td>".$data['ALAMAT']."</td>";
                    echo "<td>".$data['EMAIL']."</td>";
                    echo "<td>".$data['NO_HP']."</td>";
                }
            ?>
            <a href="ubahData.php">
                <button class="button">UBAH DATA</button>
            </a>

            <a href="tambah.php">
                <button class="button">TAMBAH DATA</button>
            </a>
         
            <a href="hapus.php">
                <button class="button">HAPUS DATA</button>
            </a>
        </table>
    </body>
</html>