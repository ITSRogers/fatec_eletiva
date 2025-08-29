<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 20 - MÉDIA DE VELOCIDADE</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercicio 20 - MÉDIA DE VELOCIDADE</h1>
<form method="post">
<div class="mb-3">
              <label for="distancia" class="form-label">Insira a distancia:</label>
              <input type="text" id="distancia" name="distancia" class="form-control" required="">
            </div><div class="mb-3">
              <label for="tempo" class="form-label">Insira o tempo:</label>
              <input type="text" id="tempo" name="tempo" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $velo_media = $_POST['distancia'] / $_POST['tempo'];
    echo "Velocidade média: $velo_media";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>