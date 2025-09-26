<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 1 - CONTATOS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="padding-top: 70px"> 
<div class="container py-3">
<h1>Exercicio 1 - CONTATOS</h1>
<form method="post">
  <?php for ($i = 1; $i <= 5; $i++): ?>
<div class="mb-3">
              <legend>Contato <?php echo $i; ?></legend>
              <label for="nome" class="form-label">Nome:</label>
              <input type="text" id="nome<?php echo $i; ?>" name="nome[]" class="form-control" required="">
            </div><div class="mb-3">
              <label for="telefone" class="form-label">Telefone:</label>
              <input type="text" id="telefone<?php echo $i; ?>" name="telefone[]" class="form-control" required="">
            </div>
  <?php endfor; ?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
include('../cabecalho_nav.php');
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $nomes_input = $_POST['nome'];
      $telefones_input = $_POST['telefone'];
      $contatos = [];

      for ($i = 0; $i < count($nomes_input); $i++) {
          $nome = trim($nomes_input[$i]);
          $telefone = trim($telefones_input[$i]);
          $contato_str = $nome . ":" . $telefone;
          $duplicado = false;
          foreach ($contatos as $c) {
              $partes = explode(":", $c);
              $nome_existente = $partes[0];
              $telefone_existente = $partes[1];
              if ($nome == $nome_existente || $telefone == $telefone_existente) {
                  $duplicado = true;
                  break;
              }
          }
          if (!$duplicado) {
              array_push($contatos, $contato_str);
          } else {
              echo "<p style='color:red;'>Contato '$nome' ou telefone '$telefone' duplicado. Ignorado.</p>";
          }
      }

      $nomes = [];
      for ($i = 0; $i < count($contatos); $i++) {
          $partes = explode(":", $contatos[$i]);
          array_push($nomes, $partes[0]);
      }
      sort($nomes);
      echo "<h2>Lista de Contatos:</h2>";
      echo "<ul>";
      for ($i = 0; $i < count($nomes); $i++) {
          for ($j = 0; $j < count($contatos); $j++) {
              $partes = explode(":", $contatos[$j]);
              if ($partes[0] == $nomes[$i]) {
                  $telefone = $partes[1];
                  break;
              }
          }
          echo "<li><strong>" . $nomes[$i] . ":</strong> " . $telefone . "</li>";
      }
      echo "</ul>";
  }
include('../rodape_nav.php');
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>