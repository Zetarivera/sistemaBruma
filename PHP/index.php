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

    <link rel="stylesheet" href="../CSS/index.css">
</head>

<body id="bodyIndex">
     <section class="hero">
        <h1 class="subtituloIndex">Encontre sua próxima experiência estética</h1>
        <div class="search-box">
            <input type="text" id="buscaProcedimento" placeholder="Procedimento">
            <input type="text" id="cidade" placeholder="Cidade">
            <button class="btn" onclick="buscarClinicas()">Buscar</button>
        </div>
    </section>

    <section class="clinicas" id="clinicas"></section>
</body>
</html>

<?php include 'footer.php'; ?>
