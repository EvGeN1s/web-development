<?php
require_once '../src/common.inc.php';

if (getRequestMethod() === 'POST')
{
    getFeedbackPage();
}
else
{
    feedbacksListPage();
}