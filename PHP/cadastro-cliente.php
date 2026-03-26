<?php
  include 'header.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=devide-width, initial-scale=1.0" />
    <title>Bruma | Cadastro de Usuário</title>

    <script src="jquery-3.7.1.js"></script>
    <script src="../JS/forms.js"></script>

    <link rel="stylesheet" href="../CSS/cadastro-cliente.css">
</head>
  
<body>
<section style="padding:60px 8%; display:flex; justify-content:center; background-color: #f9f7fc;">
        
        <div class="card" style="max-width:450px; width:100%;">
            <h2 style="text-align:center;">Criar Conta</h2>

            <form action="cadastrar-cliente.php" method="post">
            
            <input type="text" id="nome" placeholder="Nome completo" required style="margin-top:15px;">
            
            <input type="email" id="email" placeholder="Email" required style="margin-top:15px;">
            
            <input type="tel" id="telefone" placeholder="Telefone" required style="margin-top:15px;">
            
            <input type="date" id="dataNascimento" required style="margin-top:15px;">
            
            <input type="password" id="senha" placeholder="Senha" required style="margin-top:15px;">
            
            <input type="password" id="confirmarSenha" placeholder="Confirmar senha" required style="margin-top:15px;">

            <button class="btn" style="width:100%; margin-top:20px;">
                Cadastrar
            </button>
            </form>

            <p id="mensagem" style="margin-top:15px; text-align:center;"></p>

            <div style="text-align:center; margin-top:20px;">
            Já tem conta? <a style="text-decoration:underline" href="login-cliente.php">Entrar</a>
            </div>
        </div>

        </section>
  </form>
</body>
</html>

<?php include 'footer.php'; ?>
