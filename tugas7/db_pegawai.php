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

  $sql = "CREATE TABLE pegawai (
      ID_PG INT(10) PRIMARY KEY,
      NAMA VARCHAR(100) NOT NULL,
      ALAMAT VARCHAR(20) NOT NULL,
      EMAIL VARCHAR(50) NOT NULL,
      ALAMAT VARCHAR(200) NOT NULL,
      NO_HP VARCHAR(20) NOT NULL
      )";
      
  if (mysqli_query($conn, $sql)) {
      echo "Database created successfully";
  } else {
      echo "Error creating database" . mysqli_error($conn);
  }
  mysqli_close($conn);
?>