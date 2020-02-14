<?php

  $id = $_GET['id_slika'];
  // do some validation here to ensure id is safe

  $link = mysql_connect("localhost", "root", "");
  mysql_select_db("e-komercija");
  $sql = "SELECT slika FROM sliki WHERE id_slika < 20";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['slika'];
?>