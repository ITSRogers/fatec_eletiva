<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 2 - SUBTRACAO</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container">
<h1>Exercicio 2 - SUBTRACAO</h1>
<form method="post">
<div class="mb-3">
              <label for="num1" class="form-label">Digite o primeiro número:</label>
              <input type="number" id="num1" name="num1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="num2" class="form-label">Digite o segundo número:</label>
              <input type="number" id="num2" name="num2" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;

    if ($num1 < 0 || $num2 < 0) {
        echo "<div class='alert alert-danger mt-3'>Por favor, insira números não negativos.</div>";
    } else {
        $subtracao = $num1 - $num2;
        echo "<div class='alert alert-success mt-3'>A subtração de $num1 e $num2 é: <strong>$subtracao</strong></div>";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>