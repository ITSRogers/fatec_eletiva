<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 17 - RENDIMENTO CAPITAL</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercicio 17 - RENDIMENTO CAPITAL</h1>
<form method="post">
<div class="mb-3">
              <label for="capital" class="form-label">Insira o capital:</label>
              <input type="text" id="capital" name="capital" class="form-control" required="">
            </div><div class="mb-3">
              <label for="juros" class="form-label">Insira a taxa de juros:</label>
              <input type="text" id="juros" name="juros" class="form-control" required="">
            </div><div class="mb-3">
              <label for="periodo" class="form-label">Insira o periodo:</label>
              <input type="text" id="periodo" name="periodo" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $rendimento = $_POST['capital']+($_POST['capital'] * ($_POST['juros']/100) * $_POST['periodo']);
    echo "Total = R$$rendimento";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>