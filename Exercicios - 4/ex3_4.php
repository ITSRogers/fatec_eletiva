<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 3 - PRODUTOS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="padding-top: 70px"> 
<div class="container py-3">
<h1>Exercicio 3 - PRODUTOS</h1>
<form method="post">
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="mb-3">
            <legend>Produto <?php echo $i; ?></legend>
            <label for="codigo<?php echo $i; ?>" class="form-label">Código:</label>
            <input type="text" id="codigo<?php echo $i; ?>" name="codigo[]" class="form-control" required="">
            </div><div class="mb-3">
            <label for="nome<?php echo $i; ?>" class="form-label">Nome:</label>
            <input type="text" id="nome<?php echo $i; ?>" name="nome[]" class="form-control" required="">
            </div><div class="mb-3">
            <label for="preco<?php echo $i; ?>" class="form-label">Preço:</label>
            <input type="number" id="preco<?php echo $i; ?>" name="preco[]" class="form-control" required="">
        </div>
    <?php endfor; ?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
include('../cabecalho_nav.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigos = $_POST['codigo'];
    $nomes = $_POST['nome'];
    $precos = $_POST['preco'];
    $produtos = [];
    for ($i = 0; $i < count($codigos); $i++) {
        $preco = (float)$precos[$i];
        if ($preco > 100) {
            $preco = $preco * 0.9;
        }
        $produtos[$codigos[$i]] = [
            "nome" => $nomes[$i],
            "preco" => round($preco, 2)
        ];
    }
    uasort($produtos, function($a, $b) {
        return strcmp($a['nome'], $b['nome']);
    });
    echo "<h2>Lista de Produtos (ordenados pelo nome):</h2>";
    echo "<ul>";
    foreach ($produtos as $codigo => $dados) {
        echo "<li><strong>Código:</strong> $codigo | <strong>Nome:</strong> {$dados['nome']} | <strong>Preço:</strong> R$ {$dados['preco']}</li>";
    }
    echo "</ul>";
}
include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>