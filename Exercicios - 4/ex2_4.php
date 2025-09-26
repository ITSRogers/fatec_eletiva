<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 2 - ALUNO/MEDIA</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="padding-top: 70px"> 
<div class="container py-3">
<h1>Exercicio 2 - ALUNO/MEDIA</h1>
<form method="post">
    <?php for ($i = 1; $i <= 3; $i++): ?>
<div class="mb-3">
            <legend>Aluno <?php echo $i; ?></legend>
              <label for="nome" class="form-label">Nome:</label>
              <input type="text" id="nome<?php echo $i; ?>" name="nome[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="nota" class="form-label">Nota 1:</label>
              <input type="number" id="nota<?php echo $i; ?>" name="nota<?php echo $i; ?>[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="nota" class="form-label">Nota 2:</label>
              <input type="number" id="nota<?php echo $i; ?>" name="nota<?php echo $i; ?>[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="nota" class="form-label">Nota 3:</label>
              <input type="number" id="nota<?php echo $i; ?>" name="nota<?php echo $i; ?>[]" class="form-control" required="">
            </div>
    <?php endfor; ?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
  <?php
  include('../cabecalho_nav.php');
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $nomes = $_POST['nome'];
    $alunos = [];
    for ($i = 0; $i < count($nomes); $i++) {
        $notas = $_POST['nota' . ($i + 1)];
        $soma = array_sum($notas);
        $media = round($soma / count($notas), 2);
        $alunos[] = ["nome" => $nomes[$i], "media" => $media];
    }
    usort($alunos, function($a, $b) {
        return $b['media'] <=> $a['media'];
    });
    echo "<h2>Lista de Alunos (do maior para o menor):</h2>";
    echo "<ul>";
    foreach ($alunos as $aluno) {
        echo "<li><strong>{$aluno['nome']}:</strong> {$aluno['media']}</li>";
    }
    echo "</ul>";
  }
  include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>