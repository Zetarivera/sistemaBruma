<html>
<head>
    <title></title>
    <style>
        .styleHeader {
            padding: 2px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            font-size: 15px;
            flex-wrap: wrap;
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        .logo{
            color: black;
        }

        .navbar, .navbarLogin {
            align-items: first baseline;
            display: flex;
            gap: 2em;
            font-size: 14px;
        }

        .navbarLogin{
            color: white;
        }

        .navbar a{
            color: gray;
        }

        .header label {
            display: block;
            font: 1rem "Fira Sans", sans-serif;    
        }

        .navbar input, label {
            margin: 0.4rem 0;
        }

        .styleHeader a:hover {
            color: coral;
        }

        .styleHeader a {
            font-weight: bold;
        }

        .buttonCadastrar{
            background-color: coral;
            color: white;
            font-weight: bold;
            padding: 08px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 20px;
            border-color: transparent;
        }

        .buttonCadastrar:hover {
            opacity: 0.8;
        }

        #buttonEntrar1{
            background-color: coral;
            color: white;
            padding: 08px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 20px;
            border-color: transparent;
        }

        #buttonEntrar1:hover {
            opacity: 0.8;
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
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .buttonEntrar2:hover {
            opacity: 0.8;
        }

        .buttonCancelar {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar{
            width: 40%;
            border-radius: 50%;
        }

        .container{
            padding: 16px;
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
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content{
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 40%
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

            .buttonCancelar{
                width: 100%;
            }
        }
    </style>
</head>

 <body>
    <header class="styleHeader">
        <div class="logo">
        <a href="index.php"><h1><b>BRUMA</b></h1></a>
        </div>

        <div class="navbar">
            <a href="index.php">Início</a>
            <a href="#clinicas">Clínicas</a>
            <a href="#servicos">Serviços</a>
            <a href="#sobre">Sobre Nós</a>
        </div>

        <div class="navbarLogin">
            <button type="button"
                    onclick=
                    "document.getElementById('id01').style.display='block'"
                    class="buttonEntrar1" name="buttonEntrar1" id="buttonEntrar1">
                <b>Entrar</b>
            </button>

            <div id="id01" class="modal">
                <form class="modal-content animate" action="">
                    <div class="imgcontainer">
                        <span onclick=
                                "document.getElementById('id01').style.display='none'"
                                class="close"
                                title="Close Modal">&times;</span>
                        <img src=""
                        alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label><b>E-mail:</b></label>
                        <input type="text"
                                placeholder="Digite seu e-mail"
                                name="userEmail" required>

                        <label><b>Senha:</b></label>
                        <input type="password"
                                placeholder="Digite sua senha"
                                name="userSenha" required>

                        <button class="buttonEntrar2" type="submit">Entrar</button>
                        <input type="checkbox" checked="checked">Lembre de mim
                    </div>

                    <div class="container"
                        style="background-color: #f1f1f1;">
                        <button type="button"
                                onclick=
                                "document.getElementById('id01').style.display='none'"
                                class="buttonCancelar">Cancelar</button>
                        <span class="userSenha">Esqueceu a <a href="#">senha?</a></span>
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

            <a class="linkCadastrar" href="cadastroUsuario.php">
                <input type="button" class="buttonCadastrar" value="Cadastrar" />
            </a>
        </div>
    </header>
 </body>
 </html>