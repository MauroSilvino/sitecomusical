<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "jardim197";
$db_name = "newsletter_site1";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Erro na conexão:".mysqli_connect_error;
endif;

function clear($input){
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-news'])):
    $nome = clear($_POST['nome']);
    $email = clear($_POST['email']);

    $sql = "INSERT INTO newsletter (nome, email) VALUES ('$nome', '$email')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Enviado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao enviar.";
        header('Location: ../index.php');
    
    endif;
endif;



?>