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

function altCategorias(){
      global $connection;
      global $cat_id;

      echo '
      <form class="" action="categorias.php" method="POST">
        <div class="form-group">
          <label for="cat_nome">Alterar Categoria</label>

      ';

      $query = "SELECT * from categorias WHERE cat_id = $cat_id";
      $select_categorias = mysqli_query($connection, $query);
      while($row = mysqli_fetch_assoc($select_categorias)){
        $cat_id = $row['cat_id'];
        $cat_nome = $row['cat_nome'];
        ?>
        <input value="<?php if(isset($cat_nome)) {echo $cat_nome;}?>" type="text" class="form-control" name="cat_nome" id="names">
        <input value="<?php if(isset($cat_id)) {echo $cat_id;}?>" type="hidden" class="form-control" name="cat_id" id="names">
      <?php  }
      echo '</div>
      <div class="form-group">
        <input type="submit" class="form-control" name="cat_alterar" value="Alterar">
      </div>
    </form>';

  }
  function uptCategoria(){
    global $connection;


    if (isset($_POST['cat_alterar'])) {
      $nome = $_POST['cat_nome'];
      $id = $_POST['cat_id'];
      $query = "UPDATE categorias SET cat_nome = '$nome' WHERE cat_id = $id";
      $resultado = mysqli_query($connection, $query);
      if(!$resultado){
        die("Shiii, falhou na hora de atualizar");
      }else{
        echo "Dados atualizados com sucesso!!";
      }
    }
  }



?>
