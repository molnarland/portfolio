<?php

include 'layout/header.php';

$numbers = [1, 2, 3, 9];
$i = 0;
$sum = 0;

while ($i < count($numbers))
{
    echo $numbers[$i] . ' ';
    $sum = $sum + $numbers[$i];
    $i++;
}
echo '<br>összeg: ' . $sum;


$sum = 0;
for ($i = 0; $i < count($numbers); $i++)
{
    $sum = $sum + $numbers[$i];
}
echo '<br>2. összeg: '. $sum;


echo '<br>';
$sum = 0;
foreach ($numbers as $number)
{
    echo $number . ' ';
    $sum += $number;
}
echo '3. összeg: ' . $sum;


echo array_sum($numbers);

?>
<form method="get">
    <br>
    <select name="numbers[]" size="100" multiple>
<?php
for ($i = 1; $i < 101; $i++)
{
    echo '<option value="' . $i . '">' . $i . '</option>';
}
?>
    </select>
    <button name="submit-button" type="submit">klikkelj csöves</button>
</form>

<?php

if (isset($_GET['submit-button'], $_GET['numbers']))
{
    $numbers = $_GET['numbers'];
    echo array_sum($numbers);
}

include 'layout/footer.php';
