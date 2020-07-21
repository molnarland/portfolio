<?php

/**
 * Sum two numbers
 * @param int $a
 * @param int|null $b
 * @return int
 */
function sum(int $a, int $b = null): int
{
    if ($b === null)
    {
        return $a;
    }

    return $a + $b;
}
echo sum(20);

function isLowercase(string $text): bool
{
    $correctChars = getCorrectChars();

    foreach (str_split($text) as $currentChar)
    {
        if (!in_array($currentChar, $correctChars))
        {
            return false;
        }
    }

    return true;
}

function textReverse(string $text): string
{
    $splittedText = str_split($text);
    $reversedText = [];

    for ($i = count($splittedText) - 1; $i >= 0; $i--)
    {
        $reversedText[] = $splittedText[$i];
    }

    return implode($reversedText);
}

/**
 * @return string[]
 */
function getCorrectChars(): array
{
    $correctChars = range('a', 'z');
    $correctChars[] = ' ';

    return $correctChars;
}

function changeToAscii(string &$text)
{
    $splittedText = str_split($text);
    $ascii = [];

    foreach ($splittedText as $char)
    {
        $ascii[] = ord($char);
    }

    $text = implode(', ', $ascii);
}

function textFormat(string $text): string
{
    $text = trim($text);
    if (isLowercase($text))
    {
        return textReverse($text);
    }

    changeToAscii($text);
    return $text;
}

