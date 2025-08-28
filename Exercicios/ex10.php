<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 10 - PERIMETRO DO RETANGULO</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercicio 10 - PERIMETRO DO RETANGULO</h1>
<form method="post">
<div class="mb-3">
              <label for="largura" class="form-label">Insira a largura:</label>
              <input type="text" id="largura" name="largura" class="form-control" required="">
            </div><div class="mb-3">
              <label for="" class="form-label">Insira a altura:</label>
              <input type="text" id="altura" name="altura" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $perimetro = ($_POST['largura'] + $_POST['altura']) * 2;
    echo "O perimetro do retangulo é: $perimetro";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>