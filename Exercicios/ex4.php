<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 3- MULTIPLICAÇÃO</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container">
<h1>Exercicio 4 - DIVISÃO</h1>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $num1_div = $_POST['num1'];
    $num2_div = $_POST['num2'];
    if ($num2_div == 0)
    {
        echo "Insira um número diferente de 0.";
    }
    else
    {
        $div = $num1_div / $num2_div;
        echo "A divisão de $num1_div / $num2_div é $div.";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>