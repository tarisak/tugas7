<?php 
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "db_pegawai";

  // create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // check connection
  if (!$conn) {
      die("Connection failed:" . mysqli_connect_error());
  }

  $sql = "CREATE TABLE departement (
      ID_DP INT(10) PRIMARY KEY,
      NAMA_DEPART VARCHAR(50) NOT NULL
      )";
      
  if (mysqli_query($conn, $sql)) {
      echo "Database created successfully";
  } else {
      echo "Error creating database" . mysqli_error($conn);
  }
  mysqli_close($conn);
?>