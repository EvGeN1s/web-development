<?php
require_once '../src/common.inc.php';

$requestMethod = getRequestMethod();


if ($requestMethod === 'POST')
{
    saveFeedbackPage();
}
else
{
    mainPage();
}