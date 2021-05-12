<?php

require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Classification\MLPClassifier;

$perceptrons = new MLPClassifier(2, [1], [0, 1]);
$samples = [[0, 0], [0, 1], [1, 0], [1, 1]];

$targets = [0, 0, 0, 1];

$perceptrons->train($samples, $targets);

$predict = $perceptrons->predict([[0, 0], [0, 1], [1, 0], [1, 1]]);

for ($i = 0; $i < 4; $i++) {
    echo $predict[$i] . "\n";
}
