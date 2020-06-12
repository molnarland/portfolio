<?php include 'layout/header.php'; ?>

<?php
$arrayLength = rand(100, 10000);
$numbers = [];

for ($i = 0; $i < $arrayLength; $i++)
{
    $numbers[] = rand(-100, 100);
}

$negatives = 0;
$positives = 0;
$zeros = 0;
foreach ($numbers as $number)
{
    if ($number > 0)
    {
        $positives++;
    }
    elseif ($number < 0)
    {
        $negatives++;
    }
    else
    {
        $zeros++;
    }
}
?>
<table>
    <tr>
        <th>név</th>
        <th>db</th>
    </tr>
    <tr>
        <td>positive</td>
        <td><?=$positives?></td>
    </tr>
    <tr>
        <td>negative</td>
        <td><?=$negatives?></td>
    </tr>
    <tr>
        <td>zeros</td>
        <td><?=$zeros?></td>
    </tr>
</table>

<?php
function positive($number)
{
    return $number > 0;
}

$positives = count(array_filter($numbers, 'positive'));
var_dump($positives);
?>

<?php include 'layout/footer.php'; ?>
