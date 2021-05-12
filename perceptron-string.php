<?php

require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Classification\MLPClassifier;

$perceptrons = new MLPClassifier(1, [1], ['um', 'dois', 'tres', 'quatro', 'cinco']);

$samples = [[1], [2], [3], [4], [5]];
$targets = ['um', 'dois', 'tres', 'quatro', 'cinco'];

$perceptrons->train($samples, $targets);

$predict = $perceptrons->predict([[1], [2], [3], [4], [5]]);

for ($i = 0; $i < 5; $i++) {
    echo $predict[$i] . "\n";
}
