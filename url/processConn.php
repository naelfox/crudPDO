<?php



include_once('connection.php');
include_once('url.php');
session_start();


//inserindo um colaborador

//pegar os dados via post
$data = $_POST;

//verificar se o post recebeu algo
if (!empty($data)) {


    //inserir no banco
    if ($data['type'] === "insert") {
        $name = $data['name'];
        $phone = $data['phone'];
        $cpf = $data['cpf'];


        $query = "INSERT INTO employees (name, phone, cpf) VALUES (:name, :phone, :cpf)";

        $statement = $connection->prepare($query);

        $statement->bindParam(":name", $name);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":cpf", $cpf);

        try {
            $statement->execute();
            $_SESSION['msg'] = "Novo colaborador inserido!";
        } catch (PDOException $e) {
            $erroMsg = $e->getMessage();
            echo "Erro ao inserir: <br> $erroMsg";
        }
    }
    // Atualizar os dados do banco 
    else if ($data['type'] === 'update') {
        $name = $data['name'];
        $phone = $data['phone'];
        $cpf = $data['cpf'];
        $id_mat = $data['id_mat'];

        $query = "UPDATE employees SET name = :name, phone = :phone, cpf = :cpf WHERE id_mat = :id_mat";

        $statement = $connection->prepare($query);

        $statement->bindParam(":name", $name);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":cpf", $cpf);
        $statement->bindParam(":id_mat", $id_mat);

        try {
            $statement->execute();
            $_SESSION['msg'] = "Colaborador atualizado!";
        } catch (PDOException $e) {
            $erroMsg = $e->getMessage();
            echo "Erro na atualização:  <br> $erroMsg";
        }
    }

    //Deletar 

    else if ($data['type'] === 'delete') {
        $id_mat = $data['id_mat'];

        $query = "DELETE from employees WHERE id_mat = :id_mat";

        $statement = $connection->prepare($query);
        $statement->bindParam(":id_mat", $id_mat);

        try {
            $statement->execute();
            $_SESSION['msg'] = "Colaborador excluido";
        } catch (PDOException $e) {
            $erroMsg = $e->getMessage();
            echo "Erro ao deletar: <br> $erroMsg";
        }
    }


    header("Location:" . $URL . "../index.php");
}



//Funções para visualizar

$mat;
//verificando o get
if (!empty($_GET)) {
    $mat = $_GET['id'];
}

//retornando um dado
if (!empty($mat)) {
    $query = "SELECT * FROM employees WHERE id_mat = :mat";

    $statement = $connection->prepare($query);
    $statement->bindParam(":mat", $mat);
    $statement->execute();

    $employee = $statement->fetch();
} else {

    //vendo todos os Funcionários

    $query = "SELECT * FROM employees";

    $employees = [];

    $statement = $connection->prepare($query);

    $statement->execute();

    $employees = $statement->fetchAll(PDO::FETCH_ASSOC);
}


$conexao = null;
