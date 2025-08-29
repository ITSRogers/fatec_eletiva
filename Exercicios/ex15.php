<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 15 - IMC</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercicio 15 - IMC</h1>
<form method="post">
<div class="mb-3">
              <label for="peso" class="form-label">Insira seu peso(kg):</label>
              <input type="text" id="peso" name="peso" class="form-control" required="">
            </div><div class="mb-3">
              <label for="alt" class="form-label">Insira sua altura(metros):</label>
              <input type="text" id="alt" name="alt" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $imc = $_POST['peso'] / ($_POST['alt']**2);
    echo "IMC = $imc";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>