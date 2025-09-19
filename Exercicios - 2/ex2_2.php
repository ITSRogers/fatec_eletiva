<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 2 (LISTA 2) - SOMA DOS VALORES IGUAIS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="padding-top: 70px"> 
<div class="container py-3">
<h1>Exercicio 2 - SOMA DOS VALORES IGUAIS</h1>
<form method="post">
<div class="mb-3">
              <label for="valor1" class="form-label">Insira o 1º valor:</label>
              <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor2" class="form-label">Insira o 2º valor:</label>
              <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    include('../cabecalho_nav.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $n1 = $_POST['valor1'];
        $n2 = $_POST['valor2'];
        $soma = $n1 + $n2;
        echo("$n1 + $n2 = $soma");
        echo "<br/>";
        if($n1 == $n2){
            echo("Números iguais! $soma x 3 = ".$soma*3);
        }
    }
    include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>