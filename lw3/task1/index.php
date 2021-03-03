<?php

header("Content-Type: text/plain");
$text = getQueryStringParameter('text');
echo('Исходная строка: ' . $text . PHP_EOL);
$text = trim($text);
$text = preg_replace("/\s+/", " ", $text);
echo($text);

function getQueryStringParameter(string $name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}