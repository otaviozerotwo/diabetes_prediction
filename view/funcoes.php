<?php
//normalizador
    $sexo = $_GET["sexo"];
    $idade = $_GET["idade"];
    $hipertensao = $_GET["hipertensao"];
    $doencaCardiaca = $_GET["doencaCardiaca"];
    $fumante = $_GET["historicoFumante"];
    $imc = $_GET["imc"];
    $nivelHba1c = $_GET["Hba1c"];
    $glicose = $_GET["glicose"];

    if ($sexo == 'Feminino') {
        $sexo = 0;
    } else {
        $sexo = 1;
    }

    $idade = normalizador(80,0.08,$idade);

    if ($hipertensao == 'Sim') {
        $hipertensao = 1;
    } else {
        $hipertensao = 0;
    }

    if ($doencaCardiaca == 'Sim') {
        $doencaCardiaca = 1;
    } else {
        $doencaCardiaca = 0;
    }

    if ($fumante == 'Nenhuma informação'){
        $fumante = 2;
    }elseif ($fumante == 'Ex fumante') {
        $fumante = 4;
    }elseif($fumante == 'Fumo'){
        $fumante = 3;
    }elseif($fumante == 'Sempre fumo'){
        $fumante = 5;
    }elseif($fumante == 'Não fumo mais'){
        $fumante = 6;
    }elseif($fumante == 'Nunca fumei'){
        $fumante = 1;
    }

    $fumante = normalizador(6,1,$fumante);

    $imc = normalizador(88.72,10.3,$imc);

    $nivelHba1c = normalizador(9,3.5,$nivelHba1c);

    $glicose = normalizador(300,80,$glicose);



    //centroides k-means
$matriz = array(
    array(0.411, 0.496, 0.058, 0.028, 0.245, 0.207, 0.345, 0.244),
    array(0, 0.748, 0.237, 0.108, 0.272, 0.287, 0.634, 0.522),
    array(1, 0.767, 0.224, 0.173, 0.372, 0.265, 0.632, 0.502)
);

//centroides k-medoides
$matriz2 = array(
    array(0, 0.687, 0, 0, 0.2, 0.217, 0.545, 0.545),
    array(0, 0.474, 0, 0, 0.2, 0.217, 0.418, 0.209),
    array(1, 0.374, 0, 0, 0.2, 0.238, 0.4, 0.209)
);

// Passar dados do forms aqui apos normalizar dados de entrada
//$item = array(sexo, idade, hiperteção, doença cardiaca, historico fumar, imc,hba1c, nivel de glicose);
$item = array($sexo, $idade, $hipertensao, $doencaCardiaca, $fumante, $imc, $nivelHba1c, $glicose);

// Calcular a distância euclidiana entre o item e todas as linhas da matriz
$distancias = array();
foreach ($matriz as $linha) {
    $distancia = distanciaEuclidiana($item, $linha);
    $distancias[] = $distancia;
}

// Exibir a menor distâncias calculadas
$menorDistancia = $distancias[0];
$posicaoMenorDistancia = 0;

foreach ($distancias as $linha => $distancia) {
   // echo "Distância entre o item e a linha $linha: $distancia\n";
   // echo "<br>";

    if ($distancia < $menorDistancia) {
        $menorDistancia = $distancia;
        $posicaoMenorDistancia = $linha;
    }
}

if ($posicaoMenorDistancia == 0){
    echo "Baixa probabilidade de ter diabetes";
}else{
    echo "Alta probabilidade de ter diabetes";
}



?>

<?php
function normalizador($vr_max, $vr_min, $vr_entrada) {
    // Verificar se vr_max é igual a vr_min para evitar divisão por zero
    if ($vr_max - $vr_min == 0) {
        echo "Erro: vr_max e vr_min são iguais, o que resultaria em divisão por zero.";
    } else {
        // Realizar o cálculo
        $resultado = ($vr_entrada - $vr_min) / ($vr_max - $vr_min);
        return $resultado;
    }
}
?>

<?php
//calcula a distancia
function distanciaEuclidiana($ponto1, $ponto2) {
    $somaQuadrados = 0;
    for ($i = 0; $i < 3; $i++) {
        $diferenca = $ponto1[$i] - $ponto2[$i];
        $somaQuadrados += $diferenca * $diferenca;
    }
    return sqrt($somaQuadrados);
}

?>

