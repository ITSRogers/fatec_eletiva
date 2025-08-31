<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Parceiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<h4 class="text-center" style="padding-top: 50px"><strong>Formulário de Parceiro</strong></h4>
<form class="row g-3" style="padding-top: 30px">
    <div class="col-md-6">
        <label for="nome-parceiro" class="form-label">Nome do Parceiro</label>
        <input type="text" class="form-control" id="nome-parceiro" placeholder="Digite o nome">
    </div>
    <div class="col-md-6">
        <label for="email-parceiro" class="form-label">E-mail do Parceiro</label>
        <input type="email" class="form-control" id="email-parceiro" placeholder="email@dominio.com">
    </div>
    <div class="col-md-6">
        <label for="nome-juridico" class="form-label">Nome Jurídico</label>
        <input type="text" class="form-control" id="nome-juridico" placeholder="Razão social">
    </div>
    <div class="col-md-6">
        <label for="celular-parceiro" class="form-label">Celular</label>
        <input type="text" class="form-control" id="celular-parceiro" placeholder="(XX) XXXXX-XXXX">
    </div>
    <div class="col-12">
        <label for="endereco-parceiro" class="form-label">Endereço do Parceiro</label>
        <textarea class="form-control" id="endereco-parceiro" rows="2" placeholder="Digite o endereço completo"></textarea>
    </div>
    <div class="col-md-6">
        <label for="data-inicio" class="form-label">Data de Início do Contrato</label>
        <input type="date" class="form-control" id="data-inicio">
    </div>
    <div class="col-md-6">
        <label for="data-fim" class="form-label">Data de Expiração do Contrato</label>
        <input type="date" class="form-control" id="data-fim">
    </div>
    <div class="col-md-6">
        <label for="valor-minimo" class="form-label">Valor Mínimo do Empréstimo</label>
        <input type="number" class="form-control" id="valor-minimo" placeholder="0,00">
    </div>
    <div class="col-md-6">
        <label for="valor-maximo" class="form-label">Valor Máximo do Empréstimo</label>
        <input type="number" class="form-control" id="valor-maximo" placeholder="0,00">
    </div>
    <div class="col-md-6">
        <label for="taxa-juros" class="form-label">Taxa de Juros (%)</label>
        <input type="number" step="0.01" class="form-control" id="taxa-juros" placeholder="0.00">
    </div>
    <div class="col-md-6">
        <label for="valor-deposito" class="form-label">Valor do Depósito</label>
        <input type="number" class="form-control" id="valor-deposito" placeholder="0,00">
    </div>
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>
<?php
include('../cabecalho_nav.php');
include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
