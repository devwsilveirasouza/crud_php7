<?php
// Parâmetros para Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_php";
// Conectando com o banco de dados
$connect = mysqli_connect($servername, $username, $password, $dbname);
// Códificação dos dados utf-8
mysqli_set_charset($connect, "utf8");
// Verifica se a conexão teve erro
if (mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
// else:
//     echo "Conectado com sucesso!";
endif;






?>
