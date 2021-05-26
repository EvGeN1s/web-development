<?php
function getGETParameter(string $name): ?string
{
    return $_GET[$name] ?? null;
}

function getPOSTParameter(string $name): ?string
{
    return $_POST[$name] ?? null;
}

function getRequestMethod(): string
{
    return $_SERVER['REQUEST_METHOD'];
}