
<?php include '../includes/db.php'; ?>
<?php include '../includes/functions.php';
?>
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
                    <div class="col-sm-12">

                      <form class="" action="posts.php" method="post">
                        <div class="form-group">
                          <label for="post_nome">Titulo do post</label>
                          <input type="text" class="form-control" name="post_nome">
                        </div>

                        <div class="form-group">
                          <label for="post_autor">Autor</label>
                          <input type="text" class="form-control" name="post_autor">
                        </div>

                        <div class="form-group">
                          <label for="post_status">Status post</label>
                          <input type="text" class="form-control" name="post_status">
                        </div>

                        <div class="form-group">
                          <label for="post_imagem">Imagem do post</label>
                          <input type="file" name="post_imagem">
                        </div>

                        <div class="form-group">
                          <label for="post_status">Tag do post</label>
                          <input type="text" class="form-control" name="post_tag">
                        </div>

                        <div class="form-group">
                          <label for="post_status">Conteudo post</label>
                          <textarea class="form-control" name="post_conteudo" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                          <input type="submit" class="form-control" name="post_cadastrar" value="Adicionar">
                        </div>



                      </form>
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
