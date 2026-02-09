<html>
<head>
    <title></title>
    <link rel="icon" href="../Assets/IMG/favicon/logo-iconeFullSize.png" type="image/png" />
    <style>
        .styleHeader {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            font-size: 15px;
            flex-wrap: wrap;
            background-color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            box-sizing: border-box;
            text-decoration: none;
        }

        .navbar-opcoes, .navbarLogin {
            align-items: first baseline;
            display: flex;
            gap: 2em;
        }

        .navbar-opcoes{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }

        .navbarLogin{
            color: white;
        }

        .header label {
            display: block;
            font: 1rem "Fira Sans", sans-serif;    
        }

        .navbar-opcoes input, label {
            margin: 0.4rem 0;
        }

        .navbar-opcoes a:hover {
            color: #2c0c64;
            font-weight: bold;
        }

        .btnLogin, #btnCadastrar{
            color: white;
            background-color: #9c15fc;
            font-weight: bold; /*Usar essa propriedade e valor ao invés de <b>*/
            padding: 08px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 15px;
            border-color: transparent;
        }

        .btnLogin:hover, #btnCadastrar:hover {
            opacity: 0.8;
        }

        .navbarLogin input{
            background-color: #f8f9fa;
        }

        /*Estilização do Modal*/
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .buttonEntrar2{
            background-color: #9c15fc;
            color: white;
            font-weight: bold;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            width: 100%;
        }

        .buttonEntrar2:hover {
            opacity: 0.8;
        }

        .imgcontainer {
            text-align: center;
            margin: 15px 0 15px 0;
            position: relative;
        }

        img.avatar{
            width: 30%;
            border-radius: 50%;
        }

        .container{
            padding: 16px;
            text-align: left;
        }

        span.userSenha{
            float: right;
            padding-top: 16px;
        }

        .modal{
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.8);
            padding-top: 60px;
        }

        .modal-content{
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 30%;
            border-radius: 10px;
        }

        #senhaRedefinir {
            color: #9c15fc;
        }

        #senhaRedefinir:hover{
            font-weight: bold;
        }

        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus{
            color: red;
            cursor: pointer;
        }

        .animate{
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s;
        }

        @-webkit-keyframes animatezoom {
            from{
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from{
                transform: scale(0);
            }
            to{
                transform: scale(1);
            }
        }

        @media screen and (max-width: 300px){
            span.userSenha{
                display: block;
                float: none;
            }
        }
    </style>
</head>

 <body>
    <header class="styleHeader">
        
        <div class="headerLogo" margin="0" padding="0">
        <a href="index.php"><img src="../Assets/IMG/logo-horizontal.png" width="180"></a>
        </div>

        <div class="navbar-opcoes">
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
                        <img src="../Assets/IMG/logo-bruma.jpg"
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
            onclick="window.location.href='cadastroUsuario.php';">
        </div>
    </header>
 </body>
 </html>