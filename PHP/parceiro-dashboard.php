<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="../CSS/parceiro-dashboard.css" >
    <link rel="shortcut icon" href="../Assets/favicon.png" type="image/x-icon">

    <title>Bruma | Dashboard Parceiro</title>
</head>
<body>
<!-- SIDEBAR -->
<div class="sidebar">
    <img src="../Assets/logo2.png">

    <a href="#" class="menu-item- active" data-page="dashboard">
        <i class="bi bi-house"></i> Dashboard
    </a>

    <a href="#" class="menu-item" data-page="servicos">
        <i class="bi bi-scissors"></i> Serviços
    </a>

    <a href="#" class="menu-item" data-page="agendamentos">
        <i class="bi bi-calendar-check"></i> Agendamentos
    </a>

    <a href="#" class="menu-item" data-page="config">
        <i class="bi bi-gear"></i> Configurações
    </a>

    <a href="#">
        <i class="bi bi-box-arrow-right"></i> Sair
    </a>
</div>


<!-- MAIN -->
<div class="main">

    <!-- TOPBAR -->
    <div class="topbar">
        <div class="user">
            <img src="https://i.pravatar.cc/100">
            <span>Clínica Bella Estética</span>
        </div>
    </div>

    <!-- CONTEÚDO -->
    <div class="content-box">

        <div class="welcome-area">
            <div class="welcome-text">
                <div class="welcome-title">
                    Olá, parceiro 👋
                </div>

                <div class="welcome-sub">
                    Bem-vindo ao painel da sua clínica no Bruma.
                </div>

                <p>
                    Aqui você pode gerenciar seus serviços, acompanhar agendamentos 
                    e manter seu perfil sempre atualizado para atrair mais clientes.
                </p>
            </div>

            <!-- IMAGEM -->
            <div class="welcome-img">
                <img src="https://cdn-icons-png.flaticon.com/512/4149/4149676.png">
            </div>
        </div>
    </div>

    <div class="content-box">
        <div class="page" id="dashboard">
            <h3>Dashboard</h3>
            <p>Resumo geral da clínica</p>
        </div>

        <div class="page d-none" id="servicos">
            <h3>Serviços</h3>
            <p>Gerencie seus serviços aqui</p>
        </div>

        <div class="page d-none" id="agendamentos">
            <h3>Agendamentos</h3>
            <p>Lista de agendamentos</p>
        </div>
    </div>
</div>

<script src="../JS/parceiro-dashboard.js" defer></script>
</body>
</html>