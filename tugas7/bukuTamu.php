<?php 
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "my_db";

  // create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // check connection
  if (!$conn) {
      die("Connection failed:" . mysqli_connect_error());
  }

  $sql = "CREATE TABLE buku_Tamu (
      ID_BT INT(10) PRIMARY KEY,
      NAMA VARCHAR(200) NOT NULL,
      EMAIL VARCHAR(50) NOT NULL,
      ISI TEXT
      )";
      
  if (mysqli_query($conn, $sql)) {
      echo "Database created successfully";
  } else {
      echo "Error creating database" . mysqli_error($conn);
  }
  mysqli_close($conn);
?>