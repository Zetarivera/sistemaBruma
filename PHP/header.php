<html>
<head>
    <title></title>
    <style>
        * {
            box-sizing: border-box;
            text-decoration: none;
            color: black;
        }

        .styleHeader {
            color: black;
            padding: 2px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            font-size: 15px;
            flex-wrap: wrap;
            background-color: #fff;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            margin: 0; padding: 0;
        }

        .navbar, .navbarLogin {
            align-items: first baseline;
            display: flex;
            gap: 2em;
            font-size: 14px;
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

        a:hover {
            color: coral;
        }

        a {
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
    </style>
</head>

 <body>
    <header class="styleHeader" style="background-color: #fff">
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
            <a class="linkEntrar" href="login.php">Entrar</a>
            <a class="linkCadastrar" href="cadastroUsuario.php">
                <input type="button" class="buttonCadastrar" value="Cadastrar" />
            </a>
        </div>
    </header>
 </body>
 </html>