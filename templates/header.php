<?php include_once('url/url.php');
include_once('url/processConn.php');
//limpar a mensagem
if (isset($_SESSION['msg'])) {
    $msgSucess = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="<?= $URL ?>styles/styles.css">
    <!--Fonte do google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--Fontawesome-->
    <script src="https://kit.fontawesome.com/36e2c4a3a7.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-sm navbar-light nav-register">
            <a class="navbar-brand" href="<?= $URL ?>index.php"><i class="fa-solid fa-registered"> Register </i> <small>Sistema de gerenciamento de pessoas</small></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="barNav">
            <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $URL ?>index.php"><i class="fa-solid fa-house-user"></i>Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= $URL ?>insert.php"><i class="fa-solid fa-circle-plus"></i>Adicionar Colaborador</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <main>