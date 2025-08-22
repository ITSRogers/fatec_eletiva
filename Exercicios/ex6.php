<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicios 6 - CONVERSÃO DE TEMPERATURA</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container">
<h1>Exercicios 6 - CONVERSÃO DE TEMPERATURA</h1>
<form method="post">
<div class="mb-3">
              <label for="tp" class="form-label">Digite a temperatura em Celsius: </label>
              <input type="number" id="tp" name="tp" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $conversao = ($_POST['tp'] * 1.8) + 32;
    echo "Fahrenheit: $conversao °";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>