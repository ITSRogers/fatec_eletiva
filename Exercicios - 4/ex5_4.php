<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 5 - LIVROS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="padding-top: 70px"> 
<div class="container py-3">
<h1>Exercicio 5 - LIVROS</h1>
<form method="post">
    <?php for ($i = 1; $i <= 5; $i++): ?>   
        <div class="mb-3">
            <legend>Livro <?php echo $i; ?></legend>
              <label for="titulo<?php echo $i; ?>" class="form-label">Titulo</label>
              <input type="text" id="titulo<?php echo $i; ?>" name="titulo[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="estoque<?php echo $i; ?>" class="form-label">Quantidade em estoque:</label>
              <input type="number" id="estoque<?php echo $i; ?>" name="estoque[]" class="form-control" required="">
            </div>
            <?php endfor; ?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
include('../cabecalho_nav.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulos = $_POST['titulo'];
    $estoques = $_POST['estoque'];
    $livros = [];
    for ($i = 0; $i < count($titulos); $i++) {
        $livros[$titulos[$i]] = (int)$estoques[$i];
    }
    ksort($livros);
    echo "<h2>Lista de Livros:</h2>";
    echo "<ul>";
    foreach ($livros as $titulo => $estoque) {
        if ($estoque < 5) {
            echo "<li><strong>$titulo:</strong> $estoque unidades <span style='color:red;'>(Baixa quantidade!)</span></li>";
        } else {
            echo "<li><strong>$titulo:</strong> $estoque unidades</li>";
        }
    }
    echo "</ul>";
}
include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>