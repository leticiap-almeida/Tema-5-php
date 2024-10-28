<?php

$carros = [
    [
        "marca" => "Toyota",
        "modelo" => "Corolla",
        "ano" => 2020,
        "cor" => "Prata"
    ],
    [
        "marca" => "Honda",
        "modelo" => "Civic",
        "ano" => 2019,
        "cor" => "Preto"
    ],
    [
        "marca" => "Ford",
        "modelo" => "Focus",
        "ano" => 2018,
        "cor" => "Azul"
    ]
];


function exibirCarros($carros) {
    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":<br>";
        echo "Marca: " . $carro["marca"] . "<br>";
        echo "Modelo: " . $carro["modelo"] . "<br>";
        echo "Ano: " . $carro["ano"] . "<br>";
        echo "Cor: " . $carro["cor"] . "<br><br>";
    }
}


echo "<strong>Array original:</strong><br>";
exibirCarros($carros);
echo "<br>";


$carros[1]["cor"] = "Branco";
echo "<strong>Array após modificar a cor do Honda Civic:</strong><br>";
exibirCarros($carros);
echo "<br>";

$carros[] = [
    "marca" => "Chevrolet",
    "modelo" => "Cruze",
    "ano" => 2021,
    "cor" => "Vermelho"
];
echo "<strong>Array após adicionar o Chevrolet Cruze:</strong><br>";
exibirCarros($carros);
echo "<br>";

array_shift($carros);
echo "<strong>Array após remover o Toyota Corolla:</strong><br>";
exibirCarros($carros);
?>
