<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=devide-width, initial-scale=1.0" />
    <title>Bruma | Cadastro de Usuário</title>

    <script src="jquery-3.7.1.js"></script>
    <script src="../JS/forms.js"></script>

    <style>
      #body-cadastroUsuario{
        text-align: center
      }
      
      /*.titulo-cadastro{
        margin-bottom: 3px;
      }

      .subtitulo-cadastro{
        margin-top: 2px;
        margin-bottom: 15px;
      }*/

      #campoForm1 input, #campoForm1 select{
        display: flexbox;
        margin: 0 auto 10px auto;
        padding: 15px;
        width: 80%;
        max-width: 300px;
        border-width: 0.5px;
        border-style: solid;
        border-color: gray;
      }

      #button-criarConta{
        font-size: 18px;
        font-weight: bold;
        padding: 8px 10px;
        color: white;
        background-color: coral;
        border-radius: 10px;
        border-width: 2px;
        border-style: solid;
        border-color: transparent;
        cursor: pointer;
      }

      .inline-item{
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        margin-bottom: 5px;
        margin-top: 3px;
      }

      #linkEntrar, #linkTermos {
        text-decoration: underline;
        cursor: pointer;
        font-weight: bold;
      }

      #linkEntrar:hover, #linkTermos:hover{
        color: coral;
      }

    </style>
  </head>
  
<body id="body-cadastroUsuario">
  <form id="form1" name="form1" action="../PHP/cadastroSucesso.php" method="POST">
      
    
        <h1 class="titulo-cadastro">Cadastre-se no Bruma</h1>
        <p class="subtitulo-cadastro">Já tem cadastro?
          <a onclick=
                "document.getElementById('id01').style.display='block'"
                class="linkEntrar" id="linkEntrar" name="linkEntrar">
                Entre na sua conta
          </a>
        </p>
        
        <div id="campoForm1" name="campoForm1">
          <input type="text" id="nome" name="nome" maxlength="150"
          placeholder="Nome completo" required />

          <input id="email" name="email" type="email" maxlength="50"
          placeholder="E-mail" autocomplete="email" required /><br>

          <input id="senha" name="senha" type="password" maxlength="20"
          placeholder="Senha de Acesso" autocomplete="current-password" required />

          <input id="senha_confirma" name="senha_confirma" type="password"
          placeholder="Confirmação da Senha" required /><br>
          
          <input type="text" id="cpf" name="cpf"
          placeholder="CPF (somente números)" maxlength="11" required />

          <input type="date" id="birthdate" name="nascimento" required/><br>

          <input type="text" id="CEP" name="CEP"
          placeholder="CEP (somente números)" maxlength="08" required/>

          <input type="text" id="cidade" name="cidade"
          placeholder="Cidade" required/> <br>
          
          <select id="estado" name="estado">
            <option value="" disabled selected>Selecione o Estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
          </select>

          <input id="celular" name="celular" type="tel" maxlength="11"
          placeholder="Celular" required /><br>
        </div>
        
        <div class="container-inline">
          <input class="inline-item" type="checkbox" required/>
          <p class="inline-item">Li e concordo com os
            <a id="linkTermos" name="linkTermos" href="termosdeuso.html">termos de uso</a>
          </p>
        </div><br/>

        <input id="button-criarConta" type="submit" value="Criar Sua Conta" />
         <br/><br/>
  </form>
</body>
</html>

<?php include 'footer.php'; ?>
