<?php
    // SESSÃO
    session_start();
    // CONEXÃO
    require_once 'db_connect.php';
    // VERIFICAÇÃO DOS CAMPOS
    if (isset($_POST['btn-deletar'])):
        $id         = mysqli_escape_string($connect, $_POST['id']);        
        // MONTANDO A QUERY
        $sql = "DELETE FROM clientes WHERE id = '$id'";
        // EXECUTANDO A QUERY
        if (mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Deletado com Sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao deletar.";
            header('Location: ../index.php');
        endif;
endif;

?>