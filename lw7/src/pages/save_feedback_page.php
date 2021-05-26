<?php



function saveFeedbackPage()
{
    $errors = [];
    define('ACCEPT_MSG', 'Ваша заявка принята');
    define('EMAIL_ERROR_MSG', 'Неккоректная почта');
    define('NAME_ERROR_MSG', 'Неккоректное имя');
    define('TEXT_ERROR_MSG', 'Введите текст');
    $pattern_name = '/^[а-яА-Яa-zA-Z]*$/';
    $patter_mail = '/\A[^@]+@([^@\.]+\.)+[^@\.]+\z/';

    $firstname = getPOSTParameter('username');
    $email = getPOSTParameter('usermail');
    $country = getPOSTParameter('country');
    $gender = getPOSTParameter('gender');
    $user_message = getPOSTParameter('text');

    $valid_mail = preg_match($patter_mail, $email);
    $valid_name = preg_match($pattern_name, $firstname);
    $valid_page = ($valid_mail) && ($valid_name) && (!empty($user_message));

    if ($valid_page)
    {

        $dir =  realpath( __DIR__ . '/../../data');
        if(!opendir($dir))
            mkdir($dir);
        $file = $dir . '/' . $email . '.txt';
        $data = [
            'name' => $firstname,
            'email' => $email,
            'country' => $country,
            'gender' => $gender,
            'message' => $user_message,
        ];
        file_put_contents($file, serialize($data));


        mainPage(['accept_msg' => ACCEPT_MSG]);
    }

    else
    {
        if (!$valid_mail)
        {
            $errors['email_error_msg'] = EMAIL_ERROR_MSG;
            //mainPage([email_error_msg => EMAIL_ERROR_MSG]);
        }

        if (!$valid_name)
        {
            $errors['name_error_msg'] = NAME_ERROR_MSG;
        }

        if (empty($user_message))
        {
            $errors['text_error_msg'] = TEXT_ERROR_MSG;

        }
        mainPage($errors + ['email' => $email, 'name' => $firstname]);
    }

}