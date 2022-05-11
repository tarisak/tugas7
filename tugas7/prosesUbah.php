<?php 
include("koneksi.php");

if(isset($_POST['ubah'])) {
    $ID_PG = $_POST['id_pg'];
    $NAMA = $_POST['nama'];
    $JK = $_POST['jk'];
    $ALAMAT = $_POST['alamat'];
    $EMAIL = $_POST['email'];
    $NO_HP = $_POST['no_hp'];

    $pegawai = mysqli_query($con, "UPDATE pegawai SET nama='$NAMA' ,jk='$JK' ,alamat='$alamat' ,email='$EMAIL' ,no_hp='$NO_HP' WHERE id_pg='$ID_PG'");

    header("Location: index.php");
}

?>