<?php 
  include_once('bd.php');

  $conn = convosql_connect();
  $id   = $_POST['idR'];
  $sql = "INSERT INTO log_clics VALUES (NULL, $id, CURRENT_TIMESTAMP())";
  $resultado = mysqli_query($conn, $sql);

  $conn->close();
?>