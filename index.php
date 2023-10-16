<?php
// Input de valor

$ducks = readline('Digite a quantidade de patinhos: ');

// Validação da quantidade de patinhos

if (!is_numeric($ducks) || $ducks <= 1 || $ducks >= 10) {
    echo "O número digitado é invalido. \n";
    echo "O número de patinhos deve ser maior que 1 e menor que 10! \n";
    exit;
}

// Itera a quantidade de patinhos

for ($i = $ducks; $i > 0; $i--) {

    echo "\n";

    // Condição da quantidade de patinhos
    echo $i != 1 ?
        $i . " patinhos foram passear \n"
        : "1 patinho foi passear \n";
    echo "Além das montanhas para brincar \n";
    echo "A mamãe gritou: Quá Quá Quá Quá \n";

    switch ($i) {
        case 2:
            echo "mas só 1 patinho voltou de lá \n";
            break;
        case 1:
            echo "mas nenhum patinho voltou de lá \n";
            break;

        default:
            echo "Mas só " . ($i - 1) . " patinhos voltaram de lá \n";
            break;
    }

    // Condição da quantidade restante de patinhos

}


echo "\n";

// Condição da quantidade de patinhos
echo "A mamãe patinha foi procurar \n";
echo "Além das montanhas para encontrar \n";
echo "A mamãe gritou: Quá Quá Quá Quá \n";
echo "E os " . $ducks . " patinhos voltaram de lá \n";