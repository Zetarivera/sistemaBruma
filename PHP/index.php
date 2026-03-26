<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Home - Bruma</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <style>
        #bodyIndex{
            background-color: #f8f9fa;
            color: black;
        }

        #home-hero{
            text-align: center;
        }

        .servicos{
            background-color: white;
            margin: 25px 40px;
            border-radius: 10px;
        }

        .filtroBusca{
            padding: 5px 20px;
            box-shadow: 2px 2px 10px 1px #888888;
            border-radius: 10px;
        }

        .opcoesFiltro{
            display: flexbox;
            align-items: center;
            justify-content: space-evenly;
        }
    </style>
</head>

<body id="bodyIndex">
    <div id="containerIndex" name="containerIndex">
        <section id="home-hero">
            <h1>Encontre o Melhor em Estética</h1>
            <p>Agende seus tratamentos nas melhores clínicas de estética da cidade. <br/>
            Qualidade, conforto e praticidade garantida.</p>
        </section>

        <section id="servicos" class="servicos">
            <div id="filtroBusca" class="filtroBusca">
                <h3>Filtros de Busca</h3>
                
                <div id="opcoesFiltro" name="opcoesFiltro">
                    <label for="buscar">Buscar</label><br/>
                    <input id="buscar" name="buscar" type="search" value="Nome da clínica ou serviço..">

                    <label for="especialidade">Especialidade</label>
                    <select name="especialidade" id="especialidade">
                        <option value="" disabled selected>Todas</option>
                        <option value="Corporal">Corporal</option>
                    </select>

                    <label for="avaliacao">Avaliação Mínima</label>
                    <select name="avaliacao" id="avaliacao">
                        <option value="" disabled selected>Todas</option>
                    </select>

                    <br/><br/><label for="faixaPreco">Faixa de Preço</label><br/>
                    <input id="faixaPreco" name="faixaPreco" type="range">
                </div>
            </div>
        </section>
        
        <section id="clinicas"></section>
        
        <section id="sobre"></section>
    </div>
</body>
</html>

<?php include 'footer.php'; ?>
