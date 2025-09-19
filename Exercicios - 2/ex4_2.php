<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 4 - REAJUSTE > R$100,00</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="padding-top: 70px"> 
<div class="container py-3">
<h1>Exercicio 4 - REAJUSTE > R$100,00</h1>
<form method="post">
<div class="mb-3">
              <label for="valor" class="form-label">Insira o valor: R$</label>
              <input type="number" id="valor" name="valor" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    include('../cabecalho_nav.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $n1 = $_POST['valor'];
        echo "Valor total R$$n1";
        echo "<br/>";
        if($n1 > 100){
            $desconto = $n1*0.15;
            echo "Valor do desconto (15%) R$$desconto";
            echo "<br/>";
            echo "Valor com desconto R$".$n1 - $desconto;
        }
        elseif($n1<=100){
            echo "Valor sem desconto R$$n1";
        }
    }
    include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>