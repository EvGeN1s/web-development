<?php

function getFeedbackPage(): void
{
    $email = getPOSTParameter('email');
    if ($email)
    {
        $userInfo = getFeedback($email);
        if (!empty($userInfo))
        {
            renderTemplate('feedback.tpl.php', $userInfo);
        }
        else
        {
            renderTemplate('feedback.tpl.php', [
                'errors' => true,
                'error_msg' => 'Неудалось найти такого пользователя',
                'email' => $email,
            ]);
        }
    }
    else
    {
        renderTemplate('feedback.tpl.php', [
            'errors' => true,
            'error_msg' => 'Некорректные данные',
        ]);
    }
}