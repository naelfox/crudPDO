<?php include_once('templates/header.php') ?>




<section id="random">

    <div class="container">
        <div class="row">
            <div class=" col-md-12">
                <h1>Mostrar</h1>

                <div class="card border-primary mb-3" style="min-width: 500px;">
                    <div class="card-header">Colaborador</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title"><?=$employee['name']?></h5>
                        <p class="card-text">Telefone: <?=$employee['phone']?></p>
                        <p class="card-text">CPF: <?=$employee['cpf']?></p>
                    </div>
                </div>

                <?php include_once('templates/back.html') ?>

            </div>
        </div>
    </div>


</section>




<?php include_once('templates/footer.php') ?>