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
      body{
        text-align: center
      }

      form{
        background-color: #f2f2f2;
      }
      
      .campoForm input, select{
        display: block;
        margin: 0 auto 1rem auto;
        padding: 20px;
        width: 30%;
        max-width: 400px;
      }

      #linkEntrar {
        text-decoration: underline;
      }

    </style>
  </head>
  
<body>
  <hr>
  <form id=formCliente action="../PHP/cadastroSucesso.php" method="POST">
      <h1>Cadastre-se no Bruma</h1>
      <p>Já tem cadastro? <a id="linkEntrar" name="linkEntrar" href="login.php">Entre na sua conta</a></p>
        
        <div id="campoForm" name="campoForm">
        <input type="text" id="nome" name="nome" maxlength="150"
        placeholder="Nome completo" required><br>

        <input id="email" name="email" type="email" maxlength="50"
        placeholder="E-mail" autocomplete="email" required><br>

        <input id="senha" name="senha" type="password" maxlength="20"
        placeholder="Senha de Acesso" autocomplete="current-password" required /><br>

        <input id="senha_confirma" name="senha_confirma" type="password"
        placeholder="Confirmação da Senha" required><br>
        
        <input type="text" id="cpf" name="cpf"
        placeholder="CPF (somente números)" maxlength="11" required><br>

        <input type="date" id="birthdate" name="nascimento" required/><br>

        <input type="text" id="CEP" name="CEP"
        placeholder="CEP (somente números)" maxlength="08" required/> <br>

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
        </select><br>

        <input id="celular" name="celular" type="tel" maxlength="11"
        placeholder="Celular" required /> <br>
        
        <input id="termos" name="termos" type="checkbox" required/>
        <label for="termos">Li e concordo com os termos de uso</label><br><br>

        <input type="submit" value="Criar Conta">
      </div>
    <br/><br/>
  </form>
</body>
</html>

<?php include 'footer.php'; ?>
