<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmar = $_POST['confirmar_senha'];

// validação simples
if ($senha !== $confirmar) {
    die("As senhas não coincidem!");
}

// criptografar senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// evitar SQL injection
$nome = $conn->real_escape_string($nome);
$email = $conn->real_escape_string($email);

// verificar se já existe
$sql_check = "SELECT id FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    die("Este e-mail já está cadastrado!");
}

// inserir no banco
$sql = "INSERT INTO usuarios (nome, email, senha) 
        VALUES ('$nome', '$email', '$senhaHash')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}
?>