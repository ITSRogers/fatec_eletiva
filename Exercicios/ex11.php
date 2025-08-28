<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 11 - PERIMETRO DO CIRCULO</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercicio 11 - PERIMETRO DO CIRCULO</h1>
<form method="post">
<div class="mb-3">
              <label for="raio_circulo" class="form-label">Insira o raio:</label>
              <input type="text" id="raio_circulo" name="raio_circulo" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $raio_circulo_p = $_POST['raio_circulo'];
    $perimetro_circulo = 2 * 3.14 * $raio_circulo_p;
    echo "O perimetro do circulo é $perimetro_circulo";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>