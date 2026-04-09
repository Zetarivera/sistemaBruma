<?php
session_start();
include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

// evita SQL injection
$email = $conn->real_escape_string($email);

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();

    // verifica senha criptografada
    if (password_verify($senha, $usuario['senha'])) {

        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];

        header("Location: dashboard.php");
        exit();

    } else {
        echo "Senha incorreta!";
    }

} else {
    echo "Usuário não encontrado!";
}
?>