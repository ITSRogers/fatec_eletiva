<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 1 (LISTA 2) - MENOR VALOR/POSIÇÃO</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="padding-top: 70px"> 
<div class="container py-3">
<h1>Exercicio 1 - MENOR VALOR/POSIÇÃO</h1>
<form method="post">
<div class="mb-3">
              <label for="valor1" class="form-label">Insira o 1º valor:</label>
              <input type="number" id="valor1" name="valor1" class="form-control" required="">
              <label for="valor2" class="form-label">Insira o 2º valor:</label>
              <input type="number" id="valor2" name="valor2" class="form-control" required="">
              <label for="valor3" class="form-label">Insira o 3º valor:</label>
              <input type="number" id="valor3" name="valor3" class="form-control" required="">
              <label for="valor4" class="form-label">Insira o 4º valor:</label>
              <input type="number" id="valor4" name="valor4" class="form-control" required="">
              <label for="valor5" class="form-label">Insira o 5º valor:</label>
              <input type="number" id="valor5" name="valor5" class="form-control" required="">
              <label for="valor6" class="form-label">Insira o 6º valor:</label>
              <input type="number" id="valor6" name="valor6" class="form-control" required="">
              <label for="valor7" class="form-label">Insira o 7º valor:</label>
              <input type="number" id="valor7" name="valor7" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    include('../cabecalho_nav.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $n1 = $_POST['valor1'];
        $n2 = $_POST['valor2'];
        $n3 = $_POST['valor3'];
        $n4 = $_POST['valor4'];
        $n5 = $_POST['valor5'];
        $n6 = $_POST['valor6'];
        $n7 = $_POST['valor7'];
        $menor = $n1;
        $posicao = 1;
        if($n2 < $menor){
            $menor = $n2;
            $posicao = 2;
        }
        if($n3 < $menor){
            $menor = $n3;
            $posicao = 3;
        }
        if($n4 < $menor){
            $menor = $n4;
            $posicao = 4;
        }
        if($n5 < $menor){
            $menor = $n5;
            $posicao = 5;
        }
        if($n6 < $menor){
            $menor = $n6;
            $posicao = 6;
        }
        if($n7 < $menor){
            $menor = $n7;
            $posicao = 7;
        }
        echo "Menor: $menor | Posição: $posicao";
    }
    include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>