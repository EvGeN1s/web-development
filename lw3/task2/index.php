<?php

header("Content-Type: text/plain");
$identifier = getQueryStringParameter('identifier');
if (preg_match("/\w/", $identifier)
{
  printf("It is not identifier");
}
else
{
    echo('Everything OK');
}

function getQueryStringParameter(string $name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}

