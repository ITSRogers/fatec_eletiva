<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<form class="row g-3" style="padding-top: 70px">
    <div class="col-md-4">
        <label for="nome1" class="form-label">Primeiro nome</label>
        <input type="text" class="form-control" id="nome1" placeholder="Rodrigo">
    </div>
    <div class="col-md-4">
        <label for="nome2" class="form-label">Segundo nome</label>
        <input type="text" class="form-control" id="nome2" placeholder="Souza">
    </div>
    <div class="col-md-4">
        <label for="username" class="form-label">Username</label>
        <div class="input-group">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" id="username" placeholder="Username">
        </div>
    </div>
    <div class="col-md-6">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade" placeholder="Cidade">
    </div>
    <div class="col-md-3">
        <label for="estado" class="form-label">Estado</label>
        <input type="text" class="form-control" id="estado" placeholder="UF">
    </div>
    <div class="col-md-3">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep" placeholder="00000-00">
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="termos">
            <label class="form-check-label" for="termos">
                Eu aceito os termos e condições
            </label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Enviar Formulário</button>
    </div>
</form>
<?php
include('../cabecalho_nav.php');
include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
