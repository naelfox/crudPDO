<?php include_once('templates/header.php') ?>



<section id="random">

    <div class="container">
        <div class="row">
            <div class=" col-md-12">
                <h1>Excluir</h1>

                <h5>Confirma a exclusão de <?= $employee['name'] ?>?</h5>


              
                <form action="<?= $URL ?>url/processConn.php" method="POST">
                    <input type="hidden" name="type" value="delete">
                    <input type="hidden" name="id_mat" value="<?= $employee['id_mat'] ?>">
                    <button type="submit" class="btn btn-success">Sim</button>
                    <button type="button" class="btn btn-danger"><a href="<?= $URL ?>index.php">Cancelar</a></button>

                </form>

            </div>
        </div>
    </div>


</section>



<?php include_once('templates/footer.php') ?>