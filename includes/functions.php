<?php

function getCategorias(){
  global $connection;
  $query = "SELECT * FROM categorias";
  return mysqli_query($connection, $query);
}


 ?>
