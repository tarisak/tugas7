<html>
    <head>
        <title>Tambah Data Pegawai</title>
    </head>

    <body>
        <form action="tambah.php" method="post" name="form1">
            <table witdh="25%" border="0">
                <tr>
                    <td> ID Pegawai</td>
                    <td><input type="text" name="id_pg"></td>
                </tr>

                <tr>
                    <td> Nama </td>
                    <td><input type="text" name="nama"></td>
                </tr>

                <tr>
                    <td> Jenis Kelamin </td>
                    <td><input type="text" name="jk"></td>
                </tr>

                <tr>
                    <td> Alamat </td>
                    <td><input type="text" name="alamat"></td>
                </tr>

                <tr>
                    <td> Email </td>
                    <td><input type="text" name="email"></td>
                </tr>

                <tr>
                    <td> No.Hp </td>
                    <td><input type="text" name="no_hp"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Simpan"></td>
                </tr>
            </table>
        </form>

        <?php 
        if(isset($_POST['Submit'])) {
            $ID_PG = $_POST['id_pg'];
            $NAMA = $_POST['nama'];
            $JK = $_POST['jk'];
            $ALAMAT = $_POST['alamat'];
            $EMAIL = $_POST['email'];
            $NO_HP = $_POST['no_hp'];

            include("koneksi.php");

            $pegawai = mysqli_query($con, "INSERT INTO pegawai(id_pg,nama,jk,alamat,email,no_hp) VALUES('$ID_PG','$NAMA','$JK','$ALAMAT','$EMAIL','$NO_HP')");

            echo "Tambah data berhasil. <a href='index.php'>View Users</a>";
        }
        ?>
    </body>
</html>