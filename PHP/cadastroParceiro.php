    <form id="formClinica" action="validacao.php" method="POST">
      <fieldset>
        <legend><b>Formulário de Clínicas</b></legend>  
          <div id="form_usuario" class="form-box"></div>
            <label for="nomeClinica">Nome da Clínica:</label><br>
              <input id="nomeClinica" name="nomeClinica" type="text" required /><br>

            <label for="cnpj">CNPJ:</label><br>
              <input id="cnpj" name="cnpj" type="text"
              placeholder="XXXXXXXXXXXXXXXX" required><br>

            <label id="enderecoClinica">Endereço:</label><br>
              <input id="enderecoClinica" name="enderecoClinica" type="adress" required><br>

            <label for="telClinica">Telefone:</label><br>
              <input id="telClinica" name="telClinica" type="tel" required><br>

          <h4>Informações de Login</h4>
            <label for="emailClinica">E-mail:</label><br>
            <input id="emailClinica" name="emailClinica" type="email" required><br>

            <label for="senhaClinica">Senha:</label><br>
              <input id="senhaClinica" name="senhaClinica" type="password" required><br>

            <label for="confirmaSenhaClinica">Confirmar Senha:</label><br>
              <input id="confirmaSenhaClinica" name="confirmaSenhaClinica" type="password" required>
            <br><br>

            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
      </fieldset>
    </form>