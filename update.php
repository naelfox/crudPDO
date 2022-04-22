
<?php include_once('templates/header.php')?>




<section id="random">

 <div class="container">
     <div class="row">
         <div class=" col-md-12">
         <h1>Atualizar</h1>

         <form action="<?= $URL ?>url/processConn.php" method="POST">
            <input type="hidden" name="type" value="update">
            <input type="hidden" name="id_mat" value="<?=$employee['id_mat']?>">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome" value="<?=$employee['name']?>">
            </div>
            <div class="form-group">
                <label for="name">Telefone:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Digite o telefone" value="<?=$employee['phone']?>">
            </div>
            <div class="form-group">
                <label for="name">CPF:</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o cpf" value="<?=$employee['cpf']?>">
            </div>


            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>


         </div>
         <?php include_once('templates/back.html') ?>
     </div>

  
 </div>


</section>




<?php include_once('templates/footer.php')?>