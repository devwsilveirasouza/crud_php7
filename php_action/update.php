<?php
    // SESSÃO
    session_start();
    // CONEXÃO
    require_once 'db_connect.php';
    // VERIFICAÇÃO DOS CAMPOS
    if (isset($_POST['btn-editar'])):
        $id         = mysqli_escape_string($connect, $_POST['id']);
        $nome       = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome  = mysqli_escape_string($connect, $_POST['sobrenome']);
        $email      = mysqli_escape_string($connect, $_POST['email']);
        $idade      = mysqli_escape_string($connect, $_POST['idade']);
        // MONTANDO A QUERY
        $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";
        // EXECUTANDO A QUERY
        if (mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Atualizado com Sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao atualizar.";
            header('Location: ../index.php');
        endif;
endif;

?>