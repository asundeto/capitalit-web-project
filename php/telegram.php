<?php

$name = $_POST['name'];
$phone = $_POST['mobile'];
$adres = $_POST['adres'];
$serviceNum = $_POST['services'];
switch ($serviceNum) {
    case "1":
        $service = "Установка Windows 7000тг";
        break;
    case "2":
        $service = "Установка Office 6000тг";
        break;
    case "3":
        $service = "Настройка принтера 5000тг";
        break;
    case "4":
        $service = "Установка Программ 5000тг";
        break;
    case "5":
        $service = "Отчистка системы 5000тг";
        break;
    case "6":
        $service = "Сборка пк 10000тг";
        break;
    case "7":
        $service = "(Windows+Office) 10000тг";
        break;
}
$services_second = $_POST['services-second'];
$services_third = $_POST['services-third'];
$comment = $_POST['comments'];

if (empty($phone) || empty($adres)) {
    header('location: /order');
} else {
    $token = "5745582622:AAG17RRwTJX3Mm68X9Ksi-ZPKDQkESZJ624";
    $chat_id = "-855245143";
    $arr = array(
        'Имя пользователя: ' => $name,
        'Телефон: ' => $phone,
        'Адрес: ' => $adres,
        'Услуга: ' => $service,
        'Доп услуга: ' => $services_second,
        'Доп услуга_3: ' => $services_third,
        'Комментарии: ' => $comment
    );

    foreach ($arr as $key => $value) {
        $txt .= "<b>" . $key . "</b> " . $value . "%0A";
    }

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");


    if ($sendToTelegram) {
        setcookie('order', 'yes', time() + 5, '/');
        header('location: /order');
    }
}

?>