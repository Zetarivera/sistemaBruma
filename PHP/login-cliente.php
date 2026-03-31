<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Document</title>
</head>
<body>
        <section style="padding:60px 8%; display:flex; justify-content:center;">
        
        <div class="card" style="max-width:400px; width:100%;">
            <h2 style="text-align:center;">Login do Cliente</h2>

            <form onsubmit="loginCliente(event)">
            <input type="email" id="email" placeholder="Email" required="" style="margin-top:15px;">
            <input type="password" id="senha" placeholder="Senha" required="" style="margin-top:15px;">

            <button class="btn" style="width:100%; margin-top:20px;">
                Entrar
            </button>
            </form>

            <p id="mensagem" style="margin-top:15px; text-align:center;"></p>

            <div style="text-align:center; margin-top:20px;">
            <a href="#" onclick="recuperarSenha()">Esqueci minha senha</a>
            </div>
        </div>

        </section>

        <!-- Firebase -->
        <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-app-compat.js"></script>
        <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-auth-compat.js"></script>
        <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-database-compat.js"></script>
        <script src="js/firebase-config.js"></script>

        <script src="js/login-cliente.js"></script>
</body>
</html>

<?php include 'footer.php'; ?>
