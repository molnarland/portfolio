<?php
include_once '../helpers.php';
include_once './Population.php';

$fileName = '../files/statistics/data.txt';
$separator = '|';

$populations = [];

$reader = fopen($fileName, 'r') or die(getFileOpenError($fileName));

while (($line = fgets($reader)) !== false)
{
    $exploded = explode($separator, $line);
    $populations[] = new Population($exploded);
}

fclose($reader);
echo '<pre>';
var_dump($populations);
echo '</pre>';
?>

<table>
    <thead>
        <tr>
            <th>City</th>
            <th>Age</th>
            <th>Population</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($populations as $population): ?>
            <tr>
                <td><?=$population->city ?></td>
                <td><?=$population->age ?></td>
                <td><?=$population->number ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<!--<table>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>City</th>-->
<!--        <th>Population</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--        --><?php //foreach(getFullPopulationByCity($populations) as $city => $population): ?>
<!--            <tr>-->
<!--                <td>--><?//= $city ?><!--</td>-->
<!--                <td>--><?//= $population ?><!--</td>-->
<!--            </tr>-->
<!--        --><?php //endforeach; ?>
<!--    </tbody>-->
<!--</table>-->


<?php

function getFullPopulationByCity(array $populations): array
{
    $fullPopulationByCity = [];

    foreach ($populations as $population)
    {
        $fullPopulationByCity[$population[0]] = array_key_exists($population[0], $fullPopulationByCity)
            ? $fullPopulationByCity[$population[0]] + (int)$population[2]
            : (int)$population[2];
    }

    return $fullPopulationByCity;
}

/**
 * @param array $population
 * @param array $fullPopulationByCity
 * @return bool|null
 */
function getIndex (array $population, array $fullPopulationByCity)
{
    foreach ($fullPopulationByCity as $i => $populationByCity)
    {
        if ($populationByCity[0] === $population[0])
        {
            return $i;
        }
    }

    return null;
}

$array = [
        'tokyo' => 20,
    'sopron' => 30
];