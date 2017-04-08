<?php include '../includes/db.php'; ?>
<?php include '../includes/functions.php'; ?>
<?php include 'includes/header.php';
 ?>


<div id="wrapper">

    <!-- Navigation -->
    <?php include 'includes/navigation.php' ?>
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Bem-vindo
                        <small>Fernando</small>
                    </h1>
                    <div class="col-sm-6">
                      <form class="" action="categorias.php" method="post">
                        <div class="form-group">
                          <label for="cat_nome">Adicionar Categoria</label>
                          <input type="text" class="form-control" name="cat_nome">
                        </div>

                        <div class="form-group">
                          <input type="submit" class="form-control" name="enviar" value="Adicionar">
                        </div>
                      </form>

                    </div>

                    <div class="col-sm-6">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Nome da Categoria</th>
                            </tr>
                          </thead>
                          <?php
                          $resultado_do_select_todas_categorias = getCategorias();
                          while ($row = mysqli_fetch_assoc($resultado_do_select_todas_categorias)) { ?>
                            <tbody>
                              <tr>
                                <td><?php echo $row['cat_id']; ?></td>
                                <td><?php echo $row['cat_nome'];  ?></td>
                              </tr>
                            </tbody>
                          <?php } ?>

                        </table>
                      </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    <!--Footer-->
    <?php include 'includes/footer.php' ?>
