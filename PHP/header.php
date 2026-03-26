<html>
<head>
    <title></title>
    <link rel="icon" href="../IMG/favicon/logo-iconeFullSize.png" type="image/png" />
    <link rel="stylesheet" href="../CSS/header.css">
</head>

 <body>
    <header class="styleHeader">
        
        <div class="headerLogo" margin="0" padding="0">
        <a href="index.php"><img src="../IMG/logo-horizontal-roxo.png" width="180"></a>
        </div>

        <div class="navbar-opcoes" style="text-decoration: none; color: white;">
            <a href="index.php">Início</a>
            <a href="#clinicas">Clínicas</a>
            <a href="#servicos">Serviços</a>
            <a href="#sobre">Sobre Nós</a>
        </div>

        <div class="navbarLogin">
            
            <button type="button"
                    onclick=
                    "document.getElementById('id01').style.display='block'"
                    class="btnLogin">Entrar</button>
                    <!-- Usar <b> no texto dentro da tag button limita
                        o CSS e "barra" a modificação de 'color' no texto
                        (mantendo ele sempre preto e em negrito)-->
        
            <div id="id01" class="modal">
                <form class="modal-content animate" action="principal.php" method="POST">
                    <div class="imgcontainer">
                        <span onclick=
                                "document.getElementById('id01').style.display='none'"
                                class="close"
                                title="Close Modal">&times;</span>
                        <img src="../public/assets/images/logo-bruma.jpg"
                        alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label><b>E-mail</b></label>
                        <input type="text"
                                placeholder="seu@email.com"
                                name="userEmail" required>

                        <label><b>Senha</b></label>
                        <input type="password"
                                placeholder="Digite sua senha"
                                name="userSenha" required>

                        <span class="userSenha">
                            <a href="#" id="senhaRedefinir">Esqueceu a senha?</a>
                        </span>

                        <button class="buttonEntrar2" type="submit">Entrar</button>
                    </div>
                </form>
            </div>

            <script>
                let modal = document.getElementById('id01');
                window.onclick = function (event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
            
            <input id="btnCadastrar" name="btnCadastrar" type="button" value="Cadastrar"
            onclick="window.location.href='cadastro-cliente.php'">
        </div>
    </header>
 </body>
 </html>