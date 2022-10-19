<?php
    // SESSÃO
    session_start();
    // CONEXÃO
    require_once 'db_connect.php';
    // VERIFICAÇÃO DOS CAMPOS
    if (isset($_POST['btn-cadastrar'])):
        $nome       = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome  = mysqli_escape_string($connect, $_POST['sobrenome']);
        $email      = mysqli_escape_string($connect, $_POST['email']);
        $idade      = mysqli_escape_string($connect, $_POST['idade']);
        // MONTANDO A QUERY
        $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
        // EXECUTANDO A QUERY
        if (mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao cadastrar.";
            header('Location: ../index.php');
        endif;
endif;

?>