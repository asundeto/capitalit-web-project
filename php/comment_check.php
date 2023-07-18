<?php
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$comments = filter_var(trim($_POST['comments']), FILTER_SANITIZE_STRING);
$rate = filter_var(trim($_POST['rate']), FILTER_SANITIZE_STRING);

setcookie('error', '', time() + 120, '/');
setcookie('user', '', time() + 120, '/');

if (empty($name)) {
    setcookie('error', 'yes', time() + 120, '/');
    header('location: /comments');
} else if (empty($comments)) {
    setcookie('user', 'yes', time() + 120, '/');
    header('location: /comments');
} else {
    setcookie('comn', '', time() + 120, '/');
    setcookie('comc', '', time() + 120, '/');
    if ($rate == '0') {
        $rate = 5;
    }
    $date = date('d.m.Y');
    $time = date("H:i");
    ;

    //DATABASE 
    $mysql = new mysqli('srv-pleskdb30.ps.kz:3306', 'capita19_smd', 'Crutoi.111', 'capita19_db');
    $mysql->query("INSERT INTO `comments` (`user_name`, `user_comment`, `user_grade`, `date`, `time`)
    VALUES('$name','$comments','$rate', '$date', '$time')");
    $mysql->close();

    header('Location: /comments');
}

?>