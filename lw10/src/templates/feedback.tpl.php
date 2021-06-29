<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/feedback_style.css"/>
</head>
<body>
    <form class="feedback" method="POST">
        <label>
            <p class="feedback__field-name">Email</p>
            <input type="email" name="email" class="feedback__email" value="<?php echo $args['email'] ?? '' ?>" />
        </label>
        <input type="submit" class="feedback__send" value="Отправить" />
    </form>
    <?php
    if (isset($args['errors'])):
        echo '<div class="feedbacks-result__error-msg">';
        echo $args['error_msg'];
        echo '</div>';
    else:
        if (isset($args['email'])):
            echo '<ul class="feedbacks-result__data">';
            echo '<li><b>Name: </b>' . $args['name'] . '</li>';
            echo '<li><b>Email: </b>' . $args['email'] . '</li>';
            echo '<li><b>Country: </b>' . $args['country'] . '</li>';
            echo '<li><b>Gender: </b>' . $args['gender'] . '</li>';
            echo '<li><b>Message: </b></li>';
            echo '<span>' . str_replace(PHP_EOL, '<br/>', $args['message']) . '</span>';
            echo '</ul>';
        endif;
    endif;
    ?>

    <a href="./" class="back-to-main">Вернуться на главную</a>
</body>