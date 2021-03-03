<? php

function getQueryStringParameter(string $name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}

getQueryStringParameter($text);
echo('Исходная строка: ' . $text);
for ($i = 0,  $i < strlen($text), $i++)
{
        $temp;
        if $text[$i] !== ' '
        {
                $temp += $text[$i];
        } 
        else
        {
                if ($text[$i + 1] !== ' ') 
                {
                    $temp += ' ';
                }
        }
        $text = $temp;
}
echo($temp);