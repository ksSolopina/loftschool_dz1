<?php

// grab recaptcha library
require_once ("recaptchalib.php");

// ваш секретный ключ
$secret = "6LeW2woTAAAAAFuKkig-MmwqLkgN6VEC5y5OFI-m";

// пустой ответ
$response = null;

// проверка секретного ключа
$reCaptcha = new ReCaptcha($secret);



// if submitted check response
if ($_POST["g-recaptcha-response"]) {

$response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

$data = array();

if ($response != null && $response->success) {



        if ($data['status'] = 'OK'){
        $data['text'] = 'Ура! Ваше письмо отправлено!';
        }
        else{
            $data['text'] = 'Ошибка! Невозможно отправить письмо!';
            }

    header("Content-Type: application/json");

} else if (empty($response)) {
    $data['text'] = 'Вы робот!';
}

    echo json_encode($data);


     exit;
?>
