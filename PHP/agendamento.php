<?php
// Recebendo dados via POST (vindos da tela de serviços)
$servico = $_POST['servico'] ?? 'Limpeza de Pele';
$clinica = $_POST['clinica'] ?? 'Bella Estética';
$bairro = $_POST['bairro'] ?? 'Moema';
$valor = $_POST['valor'] ?? '120';
$hora = $_POST['hora'] ?? '10:00';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="../CSS/agendamento.css">
<script src="../JS/agendamento.js" defer></script>

<title>Revisão do Agendamento | Bruma</title>
</head>

<body>

<!-- HEADER -->
<header class="header-bruma">
    <div class="container d-flex justify-content-between align-items-center">
        <img src="../Assets/logo.png" width="110">
        <a href="servicos.php" class="btn btn-outline-dark btn-sm">Voltar</a>
    </div>
</header>

<section class="container mt-5">

<!-- STEPPER -->
<div class="steps-bar mb-5">
    <div class="step active" id="step-1">Consulta</div>
    <div class="step" id="step-2">Seus dados</div>
    <div class="step" id="step-3">Confirmação</div>
</div>

<div class="card agendamento-card">

<!-- ETAPA 1 -->
<div class="step-content active" id="content-1">

<h4 class="mb-4">Revise sua consulta</h4>

<div class="resumo-item">
    <strong>Serviço:</strong> <?= $servico ?>
</div>

<div class="resumo-item">
    <strong>Clínica:</strong> <?= $clinica ?>
</div>

<div class="resumo-item">
    <strong>Bairro:</strong> <?= $bairro ?>
</div>

<div class="resumo-item">
    <strong>Horário:</strong> <?= $hora ?>
</div>

<div class="resumo-item destaque">
    <strong>Valor:</strong> R$ <?= $valor ?>
</div>

<div class="text-end mt-4">
    <button class="btn next-btn" onclick="nextStep()">Continuar</button>
</div>

</div>

<!-- ETAPA 2 -->
<div class="step-content" id="content-2">

<h4 class="mb-4">Seus dados</h4>

<div class="row g-3">

<div class="col-md-6">
<input type="text" class="form-control" placeholder="Nome completo">
</div>

<div class="col-md-6">
<input type="email" class="form-control" placeholder="E-mail">
</div>

<div class="col-md-6">
<input type="tel" class="form-control" placeholder="Telefone / WhatsApp">
</div>

<div class="col-md-6">
<input type="date" class="form-control">
</div>

</div>

<div class="d-flex justify-content-between mt-4">
<button class="btn btn-outline-secondary" onclick="prevStep()">Voltar</button>
<button class="btn next-btn" onclick="nextStep()">Continuar</button>
</div>

</div>

<!-- ETAPA 3 -->
<div class="step-content" id="content-3">

<h4 class="mb-4">Confirmação</h4>

<p>
Seu agendamento será enviado para a clínica <strong><?= $clinica ?></strong>.
</p>

<div class="alert alert-warning">
A clínica entrará em contato via WhatsApp para confirmar o pagamento.
</div>

<div class="alert alert-info">
Status inicial: <strong>Pendente</strong>
</div>

<div class="text-center mt-4">
<button class="btn confirmar-btn">
Finalizar agendamento
</button>
</div>

</div>

</div>

</section>

</body>
</html>