<?php
include_once 'functions.php';

$fileName = 'files/sentences.txt';
$newFileName = 'files/new_sentences.txt';

$reader = fopen($fileName, 'r');
$writer = fopen($newFileName, 'w') or die('file cannot open: ' . $newFileName);

if (!$reader)
{
    die('file cannot open: ' . $fileName);
}

while (($buffer = fgets($reader)) !== false)
{
    $newLine = textFormat($buffer) . PHP_EOL;
    fwrite($writer, $newLine);
}

fclose($reader);
fclose($writer);