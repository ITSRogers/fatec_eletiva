<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 5 - MEDIA DAS NOTAS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="padding-top: 70px"> 
<div class="container">
<h1>Exercicio 5 - MEDIA DAS NOTAS</h1>
<form method="post">
<div class="mb-3">
              <label for="p1" class="form-label">Insira a nota da P1:</label>
              <input type="number" id="p1" name="p1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="p2" class="form-label">Insira a nota da P2:</label>
              <input type="text" id="p2" name="p2" class="form-control" required="">
            </div><div class="mb-3">
              <label for="p3" class="form-label">Insira a nota da P3:</label>
              <input type="text" id="p3" name="p3" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
include('../cabecalho_nav.php');
    if ($_SERVER['REQUEST_METHOD']=="POST")
    {
        $soma_notas = $_POST['p1'] + $_POST['p2'] + $_POST['p3'];
        echo "<p>MÉDIA: " . $soma_notas/3 . "<p>";
    }
include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>