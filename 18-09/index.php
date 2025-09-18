<?php
    $valor = array(1,2,3,4,5);
    echo "<p>Primeiro valor do vetor: ".$valor[0]."</p>";
    //$v = $_POST['nome'];

    $vetor = [1,2,3,4,5];
    var_dump($vetor); //função para exibir valores do vetor
    echo "<br/>";
    print_r($vetor); //exibir valores do vetor porém com menos detalhes

    $vetor[4] = 6;
    echo "<p>Novo valor na posição 4: ".$vetor[4]."</p>";

    $vetor['nome'] = "Rodrigo";
    print_r($vetor);

    $valores = [
        'nome' => "Rodrigo",
        'sobrenome' => "Souza",
        'idade' => 22
    ];

    //para cada posição dentro de valores, a variavel v assumirá o valor associado (nome ou sobrenome ou idade)
    foreach($valores as $c => $v){
        echo "<p>Posição: $c => Valor: $v</p>";
    }
?>