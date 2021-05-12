<?php

require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Classification\MLPClassifier;

$classes =  ['um', 'dois', 'tres', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove', 'dez'];
$perceptrons = new MLPClassifier(
    1,
    [5],
    $classes,
    50000,
    null,
    0.3
);

$samples = [[1], [2], [3], [4], [5], [6], [7], [8], [9], [10]];
$targets = $classes;

$perceptrons->train($samples, $targets);
$predict = $perceptrons->predict([[1], [2], [3], [4], [5], [6], [7], [8], [9], [10]]);

for ($i = 0; $i < count($targets); $i++) {
    echo $predict[$i] . "\n";
}
