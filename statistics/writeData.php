<?php
include_once '../helpers.php';

$fileName = '../files/statistics/data.txt';
$separator = '|';
$fileLineNumber = rand(50, 100);

$cities = ['Tokyo', 'Csámpa', 'Sopron'];

$writer = fopen($fileName, 'w') or die(getFileOpenError($fileName));

for ($i = 0; $i < $fileLineNumber; $i++)
{
    $randomCity = $cities[rand(0, count($cities) - 1)];
    $randomAge = rand(1, 90);
    $randomPopulation = rand(1000, 10000);

    $line = implode($separator, [
        $randomCity,
        $randomAge,
        $randomPopulation,
    ]) . PHP_EOL;

    fwrite($writer, $line);
}

fclose($writer);

