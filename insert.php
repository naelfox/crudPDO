<?php include_once('templates/header.php') ?>





<section id="random">

    <div class="container">
        <div class="row">
            <div class=" col-md-12">
                <h1>Adicionar Colaborador</h1>

                <form action="<?= $URL ?>url/processConn.php" method="POST">
                    <input type="hidden" name="type" value="insert">


                    <div class="form-group">
                        <label for="name">Nome do colaborador:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Inserir o nome" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Telefone:</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Inserir o telefone" required>
                    </div>
                    <div class="form-group">
                        <label for="name">CPF:</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Inserir o cpf" required>
                    </div>


                    <button type="submit" class="btn btn-primary">Cadastrar</button>

                </form>


            </div>
            <?php include_once('templates/back.html') ?>
        </div>
    </div>


</section>


<?php include_once('templates/footer.php') ?>