<?php include 'layout/header.php'; ?>

<code>&lt;table&gt;&lt;/table&gt;</code>


<?php
$chars = [];
for ($i = 0; $i < rand(5, 100); $i++)
{
    $chars[] = chr(rand(48, 122));
}

$chars[2] = 'A';

$searchableChar = 'A';
$found = false;
for ($i = 0; $i < count($chars); $i++)
{
    $char = $chars[$i];
    echo $char . ' ';
    if ($char === $searchableChar)
    {
        $found = true;
        break;
    }
}

if ($found)
{
    echo '<p class="found" id="zsamo">Megtaláltam</p>';
}
else
    {
    echo '<p class="no-found">Nem találtam meg</p>';
}

?>

<?php include 'layout/footer.php'; ?>
