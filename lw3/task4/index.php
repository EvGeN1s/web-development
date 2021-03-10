<?php

header("Content-Type: text/plain");
$firstName = getQueryStringParameter('first_name');
$lastName = getQueryStringParameter('last_name');
$age = getQueryStringParameter('age');
$email = getQueryStringParameter('email');
if(!opendir("data"))
    mkdir("data");
echo is_dir("data");
opendir("data");
$file = fopen("$email.txt", 'w');
if($email === null) 
{
    echo("Incorect parametrs");
}
else
{
    
    fwrite($file, "$firstName $lastName $age $email");
    fclose($file);
} 


function getQueryStringParameter(string $name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}

