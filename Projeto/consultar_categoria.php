<?php
require("cabecalho.php");
require("conexao.php");

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    try {
        $stmt = $pdo->prepare("SELECT * FROM categoria WHERE id = ?");
        $stmt->execute([$_GET['id']]);
        $categoria = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    try {
        $stmt = $pdo->prepare("DELETE FROM categoria WHERE id = ?");
        if ($stmt->execute([$id])) {
            header('location:categorias.php?excluir=true');
            exit;
        } else {
            header('location:categorias.php?excluir=false');
            exit;
        }
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>
<div class="container mt-4">
<h1>Consultar Categoria</h1>
<form id="formExcluir" method="post">
    <input type="hidden" name="id" value="<?= $categoria['id'] ?>">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome da categoria:</label>
        <!-- Corrigido: 'disabled' (não 'disable') -->
        <input disabled value="<?= $categoria['nome'] ?>" type="text" id="nome" name="nome" class="form-control" required>
    </div>
    <p>Deseja excluir esse registro?</p>
    <button id="btnExcluir" type="button" class="btn btn-danger">Excluir</button>
    <button onclick="history.back();" type="button" class="btn btn-secondary">Voltar</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById("btnExcluir").addEventListener("click", function () {
    Swal.fire({
        title: 'Tem certeza?',
        text: "Essa ação não poderá ser desfeita!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Sim, excluir!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("formExcluir").submit();
        }
    });
});
</script>

<?php
require("rodape.php");
?>
