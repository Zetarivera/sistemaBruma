// exemplo básico de validação
document.querySelector("form").addEventListener("submit", function(e) {
    e.preventDefault();

    const email = document.querySelector("input[type='email']").value;
    const senha = document.querySelector("input[type='password']").value;

    if (!email || !senha) {
        alert("Preencha todos os campos!");
        return;
    }

    // Aqui você conecta com Firebase depois
    console.log("Login:", email, senha);

    alert("Login realizado (simulação)");
});