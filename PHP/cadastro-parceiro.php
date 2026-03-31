<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Clínica | Bruma</title>

    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="assets/favicon.ico">
</head>
<body style="background-color'#f9f7fc;">
        <section style="padding:60px 8%; display:flex; justify-content:center;">
        
        <div class="card" style="max-width:500px; width:100%;">
            <h2 style="text-align:center;">Cadastro de Clínica Parceira</h2>

            <form action="cadastrar-parceiro.php" method="post">
            <input type="text" id="nome" placeholder="Nome da Clínica" required style="margin-top:15px;">

            <input type="email" id="email" placeholder="Email" required style="margin-top:15px;">
            
            <input type="tel" id="telefone" placeholder="Telefone" required style="margin-top:15px;">
            
            <input type="text" id="endereco" placeholder="Endereço completo" required style="margin-top:15px;">
            
            <input type="text" id="cidade" placeholder="Cidade" required style="margin-top:15px;">
            
            <input type="password" id="senha" placeholder="Senha" required style="margin-top:15px;">

            <button class="btn" style="width:100%; margin-top:20px;">
                Cadastrar Clínica
            </button>
            </form>

            <p id="mensagem" style="margin-top:15px; text-align:center;"></p>

        </div>

        </section>
</body>
</html>

<?php include 'footer.php' ?>