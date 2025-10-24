<?php
require("cabecalho.php");
require("conexao.php");

try {
    $stmt = $pdo->query("SELECT c.nome, p.* FROM produto p INNER JOIN categoria c ON c.id = p.categoria_id");
    $dados = $stmt->fetchAll();
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

$msg = "";
$tipo = "";

if (isset($_GET['cadastro'])) {
    if ($_GET['cadastro'] == "true") {
        $msg = "Cadastro realizado com sucesso!";
        $tipo = "success";
    } else {
        $msg = "Erro ao cadastrar!";
        $tipo = "error";
    }
}

if (isset($_GET['editar'])) {
    if ($_GET['editar'] == "true") {
        $msg = "Registro editado com sucesso!";
        $tipo = "success";
    } else {
        $msg = "Erro ao editar!";
        $tipo = "error";
    }
}

if (isset($_GET['excluir'])) {
    if ($_GET['excluir'] == "true") {
        $msg = "Registro excluído com sucesso!";
        $tipo = "success";
    } else {
        $msg = "Erro ao excluir!";
        $tipo = "error";
    }
}
?>

<div class="container mt-4">
  <h2>Produtos</h2>
  <a href="novo_produto.php" class="btn btn-success mb-3">Novo Registro</a>

  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dados as $d): ?>
      <tr>
        <td><?= $d['id'] ?></td>
        <td><?= $d['descricao'] ?></td>
        <td><?= $d['nome'] ?></td>
        <td class="d-flex gap-2">
          <a href="editar_produto.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
          <a href="consultar_produto.php?id=<?= $d['id'] ?>" class="btn btn-sm btn-info">Consultar</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if ($msg): ?>
<script>
Swal.fire({
  toast: true,
  position: 'top-end',
  icon: '<?= $tipo ?>',
  title: '<?= $msg ?>',
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: true
});
</script>
<?php endif; ?>

<?php
require("rodape.php");
?>
