<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercicio 5 - VALOR ASSOCIADO AO MÊS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body style="padding-top: 70px"> 
<div class="container py-3">
<h1>Exercicio 5 - VALOR ASSOCIADO AO MÊS</h1>
<form method="post">
<div class="mb-3">
              <label for="mt" class="form-label">Insira o mês em numeral:</label>
              <input type="number" id="mt" name="mt" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
include("../cabecalho_nav.php");
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $mt = $_POST['mt'];
        switch($mt){
            case 1:
                echo "$mt - Janeiro";
                break;
            case 2:
                echo "$mt - Fevereiro";
                break;
            case 3:
                echo "$mt - Março";
                break;
            case 4:
                echo "$mt - Abril";
                break;
            case 5:
                echo "$mt - Maio";
                break;
            case 6:
                echo "$mt - Junho";
                break;
            case 7:
                echo "$mt - Julho";
                break;
            case 8:
                echo "$mt - Agosto";
                break;
            case 9:
                echo "$mt - Setembro";
                break;
            case 10:
                echo "$mt - Outubro";
                break;
            case 11:
                echo "$mt - Novembro";
                break;
            case 12:
                echo "$mt - Dezembro";
                break;
            default:
                echo "Opção inválida!";
                break;
        }
    }
include("../rodape_nav.php");
?>
<script src="/FATEC_ELETIVA-2/https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>