<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 12 - BASE E EXPOENTE</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="padding-top: 70px"> 
<div class="container py-3">
<h1>Exercicio 12 - BASE E EXPOENTE</h1>
<form method="post">
<div class="mb-3">
              <label for="base" class="form-label">Insira a base:</label>
              <input type="text" id="base" name="base" class="form-control" required="">
            </div><div class="mb-3">
              <label for="expoente" class="form-label">Insira o expoente:</label>
              <input type="text" id="expoente" name="expoente" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
include('../cabecalho_nav.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $num_elevado = $_POST['base']**$_POST['expoente'];
    echo "Resultado = $num_elevado";
}
include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>