<?php
  $host = "";
  $user = "";
  $pass = "";
  $db_name = "";

  $conn = mysqli_connect($host, $user, $pass, $db_name);
  $conn->set_charset("utf8");
  if ($conn === false) {
    echo"Erro de conexão".$conn->connect_error;
  }
?>
