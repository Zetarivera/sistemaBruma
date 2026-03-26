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
                    placeholder="Digite seu e-mail"
                    name="userEmail" required>

            <label><b>Senha</b></label>
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