<?php

$clientName = filter_var(trim($_POST['clientName']), FILTER_SANITIZE_STRING);
$clientMobile = filter_var(trim($_POST['clientMobile']), FILTER_SANITIZE_STRING);
$clientAdres = filter_var(trim($_POST['clientAdres']), FILTER_SANITIZE_STRING);
$clientService = filter_var(trim($_POST['clientService']), FILTER_SANITIZE_STRING);
$clientModel = filter_var(trim($_POST['clientModel']), FILTER_SANITIZE_STRING);
$code = filter_var(trim($_POST['code']), FILTER_SANITIZE_STRING);

if ($code == 'capital1997') { // CHANGE CODE -------------------------------------------------

    //DATABASE 
    require("../blocks/connect.php");
    //$mysqli = new mysqli('srv-pleskdb30.ps.kz:3306', 'capita19_smd', 'Crutoi.111', 'capita19_db');
    $mysqli->query("INSERT INTO `guarantee` (`user_name`, `user_number`, `user_adress`)
    VALUES('$clientName','$clientMobile','$clientAdres')");
    $mysqli->close();

    setcookie('error', '', time() + 5, '/');
    setcookie('user', 'yes', time() + 5, '/'); // SET COOKIE TIME -------------------------------------------------

    header('content-type:image/png');
    $font = realpath('mont.ttf');
    $image = imagecreatefrompng("warranty.png");
    $color = imagecolorallocate($image, 0, 0, 0);
    $date = date('d.m.Y');
    $name = "capital";
    $random = rand(17, 150);
    imagettftext($image, 40, 0, 180, 250, $color, $font, "Гарантийный талон № $random");
    imagettftext($image, 30, 0, 100, 380, $color, $font, "Дата: $date");
    imagettftext($image, 30, 0, 100, 450, $color, $font, "Ф.И.О: $clientName");
    imagettftext($image, 30, 0, 100, 520, $color, $font, "Адрес: $clientAdres");
    imagettftext($image, 30, 0, 100, 590, $color, $font, "Услуга: $clientService");
    imagettftext($image, 30, 0, 100, 660, $color, $font, "Контактный телефон: $clientMobile");
    imagettftext($image, 30, 0, 100, 730, $color, $font, "Модель: $clientModel");
    imagepng($image, "$name.png");
    imagedestroy($image);



    $token = "5745582622:AAG17RRwTJX3Mm68X9Ksi-ZPKDQkESZJ624";
    $chat_id = "-855245143";
    $arr = array(
        'ГАРАНТИЯ: ' => "Гарантийный талон № $random",
        'Имя пользователя: ' => $clientName,
        'Телефон: ' => $clientMobile,
        'Адрес: ' => $clientAdres,
        'Услуга: ' => $clientService,
        'Модель: ' => $clientModel
    );

    foreach ($arr as $key => $value) {
        $txt .= "<b>" . $key . "</b> " . $value . "%0A";
    }

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

    /*$email = 'igptbtgmwel@gmail.com';
    $message = 'HI';
    $subject = "=?utf-8?b?".base64_encode("Тестовое сообщение")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
    mail('admin@capitalit.kz', $subject, $message, $headers);*/

    header('Location: /guarantee'); // change to /warranty.php or /guarantee
} else {
    setcookie('error', 'code', time() + 20, '/');
    header('Location: /guarantee'); // change to /warranty.php or /guarantee
}


?>