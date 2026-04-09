// ================= DADOS =================
const servicos = [
    {
        nome: "Limpeza",
        clinica: "Bella Estética",
        bairro: "Moema",
        valor: 120,
        horarios: ["10:00", "11:30", "14:00"]
    },
    {
        nome: "Botox",
        clinica: "Estética Prime",
        bairro: "Pinheiros",
        valor: 350,
        horarios: ["09:00", "13:00", "16:30"]
    }
];

// ================= ELEMENTOS =================
const lista = document.getElementById("lista-servicos");
const filtros = document.querySelectorAll(".filtro");
const contador = document.getElementById("resultado-count");

// ================= RENDER =================
function renderizar(listaFiltrada) {

    lista.innerHTML = "";

    contador.innerText = `${listaFiltrada.length} resultados encontrados`;

    listaFiltrada.forEach(servico => {

        const horarios = servico.horarios || [];

        lista.innerHTML += `
        <div class="col-md-4">
            <div class="servico-card">

                <div class="servico-top">
                    <div>
                        <div class="servico-nome">${servico.nome}</div>
                        <div class="clinica">${servico.clinica}</div>
                    </div>
                </div>

                <div class="tags">
                    <span class="tag">${servico.bairro}</span>
                </div>

                <div class="horarios-preview">
                    ${
                        horarios.length > 0
                        ? horarios.slice(0,3).map(h => 
                            `<span class="hora" data-hora="${h}">${h}</span>`
                        ).join("")
                        : `<span class="text-muted">Sem horários</span>`
                    }
                </div>

                <div class="servico-footer">
                    <span class="preco">R$ ${servico.valor}</span>
                    <button class="btn agendar-btn">Agendar</button>
                </div>

            </div>
        </div>
        `;
    });
}

// ================= FILTROS =================
function aplicarFiltros() {

    let filtrados = [...servicos]; // cópia segura

    filtros.forEach(filtro => {

        if (filtro.value) {

            const tipo = filtro.dataset.filter;

            if (tipo === "preco") {

                filtrados = filtrados.filter(s => {

                    const valor = s.valor;
                    const faixa = filtro.value;

                    if (faixa === "0-100") return valor <= 100;
                    if (faixa === "100-200") return valor > 100 && valor <= 200;
                    if (faixa === "200-400") return valor > 200 && valor <= 400;
                    if (faixa === "400+") return valor > 400;

                    return true;
                });

            } else {
                filtrados = filtrados.filter(s => s[tipo] == filtro.value);
            }
        }

    });

    // ordena por preço
    filtrados.sort((a, b) => a.valor - b.valor);

    renderizar(filtrados);
}

// ================= EVENTOS FILTRO =================
filtros.forEach(f => f.addEventListener("change", aplicarFiltros));

// ================= INICIAL =================
renderizar(servicos);