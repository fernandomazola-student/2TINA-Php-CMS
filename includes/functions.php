<?php
function getCategorias(){
  global $connection;
  $query = "SELECT * FROM categorias";
  return mysqli_query($connection, $query);
}
function setCategorias(){
  global $connection;
  $nome = $_POST['cat_nome'];
  $query = "INSERT INTO categorias(cat_nome) VALUES ('$nome')";
  $results = mysqli_query($connection, $query);
  if(!$results){
    die("Não deu certo a inclusão" + mysql_error($connection));
  }else{
    echo '<div class="col-md-3"></div><div class="alert alert-success"><strong>Cadastrado com sucesso!</strong></div>';
  }
}
function delCategorias(){
  global $connection;
  // $nome = $_POST['cat_nome'];
  // $id = $_POST['cat_id'];
  $id = $_GET['delete'];
  $query = "DELETE FROM categorias WHERE cat_id = '$id'";
  $resultado = mysqli_query($connection, $query);
  if(!$resultado){
    die("Deu ruim");
  }else{
    $_SESSION['msg'] = '<div class="col-md-3"></div><div class="alert alert-warning"><strong>Dados deletados!</strong></div>';
    header("Location:categorias.php");
  }
}
?>
