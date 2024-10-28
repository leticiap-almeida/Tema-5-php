<?php

$carros = [
    ["Toyota", "Corolla", 2020, "Prata"],
    ["Honda", "Civic", 2019, "Preto"],
    ["Ford", "Focus", 2018, "Azul"]
];


function exibirCarros($carros) {
    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":<br>";
        echo "Marca: " . $carro[0] . "<br>";
        echo "Modelo: " . $carro[1] . "<br>";
        echo "Ano: " . $carro[2] . "<br>";
        echo "Cor: " . $carro[3] . "<br><br>";
    }
}

echo "<strong>Array original:</strong><br>";
exibirCarros($carros);
echo "<br>";

$carros[1][3] = "Branco";
echo "<strong>Array após modificar a cor do Honda Civic:</strong><br>";
exibirCarros($carros);
echo "<br>";

$carros[] = ["Chevrolet", "Cruze", 2021, "Vermelho"];
echo "<strong>Array após adicionar o Chevrolet Cruze:</strong><br>";
exibirCarros($carros);
echo "<br>";

array_shift($carros);
echo "<strong>Array após remover o Toyota Corolla:</strong><br>";
exibirCarros($carros);
?>
