<?php 
include("koneksi.php");

if(!isset($_GET['id'])) {
    header('Location: ubahData.php');
}

$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * FROM pegawai WHERE ID_PG='$id'");

$pegawai = mysqli_fetch_assoc($query);

?>
<html>
    <head>
        <title> DATA PEGAWAI </title>
    </head>
    <body>
        <form class="form" method="post" action="ubah.php">
            <h3> Data Pegawai </h3>
            <br>
            <label> ID Pegawai : </label>
            <input class="kotakform" type="text" name="id_pg" value="<?php echo $pegawai['ID_PG']?>">
            <br>
            <label> Nama : </label>
            <input class="kotakform" type="text" name="nama" value="<?php echo $pegawai['NAMA']?>">
            <br>
            <label> Jenis Kelamin : </label>
            <input class="kotakform" type="text" name="jk" value="<?php echo $pegawai['JK']?>">
            <br>
            <label> Alamat : </label>
            <input class="kotakform" type="text" name="alamat" value="<?php echo $pegawai['ALAMAT']?>">
            <br>
            <label> Email : </label>
            <input class="kotakform" type="text" name="email" value="<?php echo $pegawai['EMAIL']?>">
            <br>
            <label> No Hp : </label>
            <input class="kotakform" type="text" name="alamat" value="<?php echo $pegawai['NO_HP']?>">
            <br>
            <button class="button" type="button" name="ubah">Ubah</button>
        </form>
    </body>
</html>