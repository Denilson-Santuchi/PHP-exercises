<?php
$height = 1.83;
$weight = 80;

$calculate = $weight / $height ** 2;

echo "seu imc é de $calculate." . PHP_EOL;

if ($calculate <= 18.5) {
    echo 'abaixo do peso normal';
} elseif ($calculate > 18.5 && $calculate <= 24.9) {
    echo 'peso normal';
} elseif ($calculate > 24.9 && $calculate <= 29.9) {
    echo 'Excesso de peso';
} elseif ($calculate > 29.9 && $calculate <= 34.9) {
    echo 'Obesidade classe I';
} elseif ($calculate > 34.9 && $calculate <= 39.9) {
    echo 'Obesidade classe II';
} else {
    echo 'Obesidade classe III';
}
