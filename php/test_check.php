<?php
$name2 = $_POST['name'];
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$comments = $_POST['comments'];
$rate = $_POST['rate'];
$date = date('d.m.Y');
$timeH = date("H");
$timeM = date("i");
$time = $timeH + 3;
$time = "$time:$timeM";
$len = strlen($name);
$len2 = strlen($name2);
$timeCheck = time();

echo "||$name||, $comments,||$name2|| $rate, $date, ||| $time, $len, $len2, $timeCheck";

if(empty($name)) {
    echo "DA";
} else {
    echo "net";
}

?>