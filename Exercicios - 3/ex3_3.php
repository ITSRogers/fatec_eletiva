<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 3 - VERIFICAÇÃO DE PALAVRAS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="padding-top: 70px"> 
<div class="container py-3">
<h1>Exercicio 3 - VERIFICAÇÃO DE PALAVRAS</h1>
<form method="post">
<div class="mb-3">
              <label for="fr1" class="form-label">Insira a 1º palavra:</label>
              <input type="text" id="fr1" name="fr1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="fr2" class="form-label">Insira a 2º palavra:</label>
              <input type="text" id="fr2" name="fr2" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
include('../cabecalho_nav.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fr1 = $_POST['fr1'];
    $fr2 = $_POST['fr2'];
    if(strpos($fr1,$fr2)!== false) echo "A palavra $fr2 está contida na primeira palavra!";
    else echo "A palavra $fr2 não está contida na primeira palavra $fr1!";
}
include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>