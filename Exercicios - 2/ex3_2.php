<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 3 - VALORES {A} E {B}</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="padding-top: 70px"> 
<div class="container py-3">
<h1>Exercicio 3 - VALORES {A} E {B}</h1>
<form method="post">
<div class="mb-3">
              <label for="n1" class="form-label">Insira o valor A:</label>
              <input type="number" id="n1" name="n1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="n2" class="form-label">Insira o valor B:</label>
              <input type="number" id="n2" name="n2" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    include('../cabecalho_nav.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $a = $_POST['n1'];
        $b = $_POST['n2'];
        if($a == $b){
            echo"Números iguais! Valor: $a";
        }
        elseif($a > $b){
            echo"$b $a";
        }
        elseif($a < $b){
            echo"$a $b";
        }
    }
    include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>