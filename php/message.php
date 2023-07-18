<?php

$phone = $_POST['mobile'];
$message = $_POST['message'];

$token = "5745582622:AAG17RRwTJX3Mm68X9Ksi-ZPKDQkESZJ624";
$chat_id = "-855245143";
$arr = array(
    'Телефон пользователя: ' => $phone,
    'Вопрос: ' => $message
);

foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");


if ($sendToTelegram) {
    header('location: /');
}
?>