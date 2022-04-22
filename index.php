<?php include_once('templates/header.php') ?>

<section id="random">

    <div class="container">
        <div class="row">
            <div class=" col-md-12">
                <h1>Início</h1>


                <!--mostrar a mensagem-->
                <?php if (isset($msgSucess) && $msgSucess != '') : ?>
                


                    <div class="alert alert-success" role="alert">
                    <?= $msgSucess ?>
                    </div>

                <?php endif; ?>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Matrícula</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Tratativa</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($employees as $emp) : ?>
                            <tr>
                                <td><?= $emp['id_mat'] ?></td>
                                <td><?= $emp['name'] ?></td>
                                <td><?= $emp['phone'] ?></td>
                                <td><?= $emp['cpf'] ?></td>
                                <td>
                                    <div class="edit">
                                        <div>
                                            <a href="<?= $URL ?>show.php?id=<?= $emp['id_mat'] ?>"><i class="fa-solid fa-eye"></i></a>
                                        </div>

                                        <div>
                                            <a href="<?= $URL ?>update.php?id=<?= $emp['id_mat'] ?>"><i class="fa-solid fa-pen"></i></a>
                                        </div>
                                        <div>
                                        <a href="<?= $URL ?>delete.php?id=<?= $emp['id_mat'] ?>"><i class="fa-solid fa-circle-xmark"></i></a>
                                        </div>
                                    </div>


                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</section>



<?php include_once('templates/footer.php') ?>