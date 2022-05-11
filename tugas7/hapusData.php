<?php
include("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pegawai = mysqli_query($con, "DELETE FROM datapegawai WHERE ID_PG= '$id'");

    header('Location: hapus.php');
    }