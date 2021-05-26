<?php

function getFeedbackPage(): Void
{
    $email = getPOSTParameter('email');
    if($email)
    {
        $path = realpath(__DIR__ . '/../../data/' . $email . '.txt');
        if($path)
        {
            $userInfo = unserialize(file_get_contents($path));

            if (!empty($userInfo)) {
                renderTemplate('feedback.tpl.php', $userInfo);
            }
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